<?php
namespace AdeoWeb\WeatherConditions\Controller\Types;
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		/*$item = $this->_objectManager->create('AdeoWeb\WeatherConditions\Model\WeatherType');
		$item->setDescription('rainy');
		$type = $item->getDescription();*/
		//echo $type;
		$list = $this->_objectManager->get('AdeoWeb\WeatherConditions\Model\WeatherTypeRepository');
		//$item = $list->get(0);
		var_dump($item);


		$type = $this->getRequest()->getParam('type');
		$type = isset($type) ? $type : 'Sun';
		echo $type;
	}
}
