<?php
namespace AdeoWeb\WeatherConditions\Model\Data;

use AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface;

class WeatherType extends \Magento\Framework\Api\AbstractExtensibleObject implements WeatherTypeInterface
{

    /**
     * Get weathertype_id
     * @return string|null
     */
    public function getWeathertypeId()
    {
        return $this->_get(self::WEATHERTYPE_ID);
    }

    /**
     * Set weathertype_id
     * @param string $weathertypeId
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setWeathertypeId($weathertypeId)
    {
        return $this->setData(self::WEATHERTYPE_ID, $weathertypeId);
    }

    /**
     * Get id
     * @return string|null
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * Set id
     * @param string $id
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get alias
     * @return string|null
     */
    public function getAlias()
    {
        return $this->_get(self::ALIAS);
    }

    /**
     * Set alias
     * @param string $alias
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setAlias($alias)
    {
        return $this->setData(self::ALIAS, $alias);
    }

    /**
     * Get icon
     * @return string|null
     */
    public function getIcon()
    {
        return $this->_get(self::ICON);
    }

    /**
     * Set icon
     * @param string $icon
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setIcon($icon)
    {
        return $this->setData(self::ICON, $icon);
    }

    /**
     * Get description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * Set description
     * @param string $description
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
