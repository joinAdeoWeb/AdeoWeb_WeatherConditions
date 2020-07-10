<?php

namespace AdeoWeb\WeatherConditions\Api\Data;

interface WeatherTypeSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get WeatherType list.
     * @return \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
