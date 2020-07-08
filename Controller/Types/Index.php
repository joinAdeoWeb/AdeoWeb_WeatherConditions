<?php
namespace AdeoWeb\WeatherConditions\Controller\Types;
class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		$repo = $this->_objectManager->create('AdeoWeb\WeatherConditions\Model\WeatherTypeRepository');
		$item = $this->_objectManager->create('AdeoWeb\WeatherConditions\Model\Data\WeatherType');

		$type = $this->getRequest()->getParam('type');
		$type = isset($type) ? $type : 'Sun';
		echo $type;
	}
}
