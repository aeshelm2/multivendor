<?php

namespace Aeshel\Multistore\Model;

use Aeshel\Multistore\Api\SellerManagementInterface;
use Aeshel\Multistore\Model\ResourceModel\Seller\CollectionFactory;
class SellerManagement implements SellerManagementInterface
{
    protected $sellerCollection;

    public function __construct(
        CollectionFactory $sellerCollection
    )
    {
        $this->sellerCollection = $sellerCollection;
    }
    /**
     * checkName
     *
     * @param  string $name
     * @return bool
     */
	public function checkName($name)
	{
        $collection = $this->sellerCollection->create()->addFieldToFilter('store_name',$name);
        $isAvailable = count($collection->getData()) <= 0;
		return $isAvailable;
	}
}