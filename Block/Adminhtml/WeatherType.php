<?php
namespace AdeoWeb\WeatherConditions\Block\Adminhtml;

class WeatherType extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_weathertype';
		$this->_blockGroup = 'AdeoWeb_WeatherConditions';
		$this->_headerText = __('WeatherTypes');
		$this->_addButtonLabel = __('Add new WeatherType');
		parent::_construct();
	}
}
