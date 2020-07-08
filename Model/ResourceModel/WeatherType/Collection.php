<?php

namespace AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'weathertype_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \AdeoWeb\WeatherConditions\Model\WeatherType::class,
            \AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType::class
        );
    }
}
