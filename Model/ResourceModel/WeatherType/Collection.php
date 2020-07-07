<?php
namespace AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * WeatherType Resource Model Collection
 *
 * @author      me
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
        'AdeoWeb\WeatherConditions\Model\WeatherType',
        'AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType');
    }
}
