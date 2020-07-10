<?php
namespace AdeoWeb\WeatherConditions\Controller\Types;
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{

		$type = $this->getRequest()->getParam('type');
		$type = isset($type) ? $type : '%';

		$filter = $this->_objectManager->create('Magento\Framework\Api\Filter');
		$filter->setData('field','alias');
		$filter->setData('value', $type);
		$filter->setData('condition_type','like');

		//add our filter(s) to a group
		$filter_group = $this->_objectManager->create('Magento\Framework\Api\Search\FilterGroup');
		$filter_group->setData('filters', [$filter]);

		//add the group(s) to the search criteria object
		$search_criteria = $this->_objectManager->create('Magento\Framework\Api\SearchCriteriaInterface');
		$search_criteria->setFilterGroups([$filter_group]);

		//set SearchCriteria
		$sortOrder = $this->_objectManager->create('Magento\Framework\Api\SortOrder');
		$sortOrder->setField("alias");
    $sortOrder->setDirection("ASC");
		$search_criteria->setSortOrders([$sortOrder]);


		//query the repository for the object(s)
		$repo = $this->_objectManager->create('AdeoWeb\WeatherConditions\Model\WeatherTypeRepository');
		$result = $repo->getList($search_criteria);
		$products = $result->getItems();

		if (empty($products)) {
			$search_criteria = $this->_objectManager->create('Magento\Framework\Api\SearchCriteriaInterface');
			$repo = $this->_objectManager->create('AdeoWeb\WeatherConditions\Model\WeatherTypeRepository');
			$result = $repo->getList($search_criteria);
			$products = $result->getItems();
		}

		foreach($products as $product)
		{
			$id = $product->getId();
			$status = $product->getStatus();
			$alias = $product->getAlias();
			$description = $product->getDescription();

			$format = '%d %s %s %s';
			$answer = sprintf($format, $id, $status, $alias, $description);
		  echo $answer, "<br/>";
		}
	}
}
