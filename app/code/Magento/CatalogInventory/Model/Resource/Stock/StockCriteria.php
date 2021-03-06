<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\CatalogInventory\Model\Resource\Stock;

use Magento\Framework\Data\AbstractCriteria;

/**
 * Class StockCriteria
 */
class StockCriteria extends AbstractCriteria implements \Magento\CatalogInventory\Api\StockCriteriaInterface
{
    /**
     * @param string $mapper
     */
    public function __construct($mapper = '')
    {
        $this->mapperInterfaceName = $mapper ?: 'Magento\CatalogInventory\Model\Resource\Stock\StockCriteriaMapper';
        $this->data['initial_condition'] = true;
    }

    /**
     * @inheritdoc
     */
    public function setWebsiteFilter($website)
    {
        $this->data['website_filter'] = $website;
        return true;
    }

    /**
     * Add Criteria object
     *
     * @param \Magento\CatalogInventory\Api\StockCriteriaInterface $criteria
     * @return bool
     */
    public function addCriteria(\Magento\CatalogInventory\Api\StockCriteriaInterface $criteria)
    {
        $this->data[self::PART_CRITERIA_LIST]['list'][] = $criteria;
        return true;
    }
}
