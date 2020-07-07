<?php
namespace AdeoWeb\WeatherConditions\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * WeatherType Resource Model
 *
 * @author      me
 */
class WeatherType extends AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('adeoweb_weatherconditions_weathertype', 'WeatherType_id');
    }
}
