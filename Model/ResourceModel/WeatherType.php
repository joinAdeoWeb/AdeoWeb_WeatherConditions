<?php

namespace AdeoWeb\WeatherConditions\Model\ResourceModel;

class WeatherType extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('adeoweb_weatherconditions_weathertype', 'weathertype_id');
    }
}
