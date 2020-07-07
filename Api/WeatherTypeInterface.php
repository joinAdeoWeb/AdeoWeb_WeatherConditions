<?php
namespace AdeoWeb\WeatherConditions\Api\Data;

interface WeatherTypeInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const WEATHERTYPE_ID = 'weathertype_id';
    const ICON = 'icon';
    const UPDATED_AT = 'updated_at';
    const ID = 'id';
    const DESCRIPTION = 'description';
    const STATUS = 'status';
    const CREATED_AT = 'created_at';
    const ALIAS = 'alias';

    /**
     * Get weathertype_id
     * @return string|null
     */
    public function getWeathertypeId();

    /**
     * Set weathertype_id
     * @param string $weathertypeId
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setWeathertypeId($weathertypeId);

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setId($id);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Adeoweb\Weatherconditions\Api\Data\WeatherTypeExtensionInterface $extensionAttributes
    );

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setStatus($status);

    /**
     * Get alias
     * @return string|null
     */
    public function getAlias();

    /**
     * Set alias
     * @param string $alias
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setAlias($alias);

    /**
     * Get icon
     * @return string|null
     */
    public function getIcon();

    /**
     * Set icon
     * @param string $icon
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setIcon($icon);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setDescription($description);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Adeoweb\Weatherconditions\Api\Data\WeatherTypeInterface
     */
    public function setUpdatedAt($updatedAt);
}
