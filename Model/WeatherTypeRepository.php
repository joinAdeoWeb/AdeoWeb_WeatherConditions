<?php

namespace AdeoWeb\WeatherConditions\Model;

use AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterfaceFactory;
use AdeoWeb\WeatherConditions\Api\Data\WeatherTypeSearchResultsInterfaceFactory;
use AdeoWeb\WeatherConditions\Api\WeatherTypeRepositoryInterface;
use AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType as ResourceWeatherType;
use AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType\CollectionFactory as WeatherTypeCollectionFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;

class WeatherTypeRepository implements WeatherTypeRepositoryInterface
{

    protected $weatherTypeFactory;

    protected $extensibleDataObjectConverter;
    protected $dataObjectHelper;

    protected $resource;

    private $storeManager;

    protected $dataWeatherTypeFactory;

    protected $searchResultsFactory;

    protected $dataObjectProcessor;

    protected $weatherTypeCollectionFactory;

    protected $extensionAttributesJoinProcessor;

    private $collectionProcessor;


    /**
     * @param ResourceWeatherType $resource
     * @param WeatherTypeFactory $weatherTypeFactory
     * @param WeatherTypeInterfaceFactory $dataWeatherTypeFactory
     * @param WeatherTypeCollectionFactory $weatherTypeCollectionFactory
     * @param WeatherTypeSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceWeatherType $resource,
        WeatherTypeFactory $weatherTypeFactory,
        WeatherTypeInterfaceFactory $dataWeatherTypeFactory,
        WeatherTypeCollectionFactory $weatherTypeCollectionFactory,
        WeatherTypeSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->weatherTypeFactory = $weatherTypeFactory;
        $this->weatherTypeCollectionFactory = $weatherTypeCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataWeatherTypeFactory = $dataWeatherTypeFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
    ) {
        /* if (empty($weatherType->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $weatherType->setStoreId($storeId);
        } */

        $weatherTypeData = $this->extensibleDataObjectConverter->toNestedArray(
            $weatherType,
            [],
            \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface::class
        );

        $weatherTypeModel = $this->weatherTypeFactory->create()->setData($weatherTypeData);

        try {
            $this->resource->save($weatherTypeModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the weatherType: %1',
                $exception->getMessage()
            ));
        }
        return $weatherTypeModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($weatherTypeId)
    {
        $weatherType = $this->weatherTypeFactory->create();
        $this->resource->load($weatherType, $weatherTypeId);
        if (!$weatherType->getId()) {
            throw new NoSuchEntityException(__('WeatherType with id "%1" does not exist.', $weatherTypeId));
        }
        return $weatherType->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->weatherTypeCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
    ) {
        try {
            $weatherTypeModel = $this->weatherTypeFactory->create();
            $this->resource->load($weatherTypeModel, $weatherType->getWeathertypeId());
            $this->resource->delete($weatherTypeModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the WeatherType: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($weatherTypeId)
    {
        return $this->delete($this->get($weatherTypeId));
    }
}
