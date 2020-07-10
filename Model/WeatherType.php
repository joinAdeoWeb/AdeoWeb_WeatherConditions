<?php

namespace AdeoWeb\WeatherConditions\Model;

use AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface;
use AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class WeatherType extends \Magento\Framework\Model\AbstractModel
{

    protected $dataObjectHelper;

    protected $weathertypeDataFactory;

    protected $_eventPrefix = 'adeoweb_weatherconditions_weathertype';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param WeatherTypeInterfaceFactory $weathertypeDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType $resource
     * @param \AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        WeatherTypeInterfaceFactory $weathertypeDataFactory,
        DataObjectHelper $dataObjectHelper,
        \AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType $resource,
        \AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType\Collection $resourceCollection,
        array $data = []
    ) {
        $this->weathertypeDataFactory = $weathertypeDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve weathertype model with weathertype data
     * @return WeatherTypeInterface
     */
    public function getDataModel()
    {
        $weathertypeData = $this->getData();

        $weathertypeDataObject = $this->weathertypeDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $weathertypeDataObject,
            $weathertypeData,
            WeatherTypeInterface::class
        );

        return $weathertypeDataObject;
    }
}
