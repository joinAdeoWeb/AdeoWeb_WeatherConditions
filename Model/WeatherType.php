<?php
namespace AdeoWeb\WeatherConditions\Model;
use Magento\Cron\Exception;
use Magento\Framework\Model\AbstractModel;
/**
 * WeatherType Model
 *
 * @author      me
 */
class WeatherType extends AbstractModel
{
    /**
     * @var \Magento\Framework\Stdlib\DateTime
     */
    protected $_dateTime;

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AdeoWeb\WeatherConditions\Model\ResourceModel\WeatherType');
    }

}
