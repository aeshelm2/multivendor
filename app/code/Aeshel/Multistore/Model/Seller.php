<?php

namespace Aeshel\Multistore\Model;

class Seller extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'aeshel_vendor';

	protected $_cacheTag = 'aeshel_vendor';

	protected $_eventPrefix = 'aeshel_vendor';

	protected function _construct()
	{
		$this->_init('Aeshel\Multistore\Model\ResourceModel\Seller');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
