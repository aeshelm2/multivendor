<?php

namespace Aeshel\Multistore\Model\ResourceModel\Seller;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'seller_id';
	protected $_eventPrefix = 'aeshel_vendor_collection';
	protected $_eventObject = 'seller_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Aeshel\Multistore\Model\Seller', 'Aeshel\Multistore\Model\ResourceModel\Seller');
	}

}