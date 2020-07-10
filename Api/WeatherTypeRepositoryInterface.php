<?php

namespace AdeoWeb\WeatherConditions\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface WeatherTypeRepositoryInterface
{

    /**
     * Save WeatherType
     * @param \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
     * @return \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
    );

    /**
     * Retrieve WeatherType
     * @param string $weathertypeId
     * @return \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($weathertypeId);

    /**
     * Retrieve WeatherType matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete WeatherType
     * @param \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \AdeoWeb\WeatherConditions\Api\Data\WeatherTypeInterface $weatherType
    );

    /**
     * Delete WeatherType by ID
     * @param string $weathertypeId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($weathertypeId);
}
