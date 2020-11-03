<?php

namespace Aeshel\Multistore\Block\Seller;
use Magento\Newsletter\Model\Config;

class Registration extends \Magento\Customer\Block\Form\Register
{
    const CHECK_NAME_PATH = 'seller/namecheck/';
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Directory\Helper\Data $directoryHelper,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\App\Cache\Type\Config $configCacheType,
        \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory,
        \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory,
        \Magento\Framework\Module\Manager $moduleManager,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\Url $customerUrl,
        array $data = [],
        Config $newsLetterConfig = null
    ) {

        parent::__construct(
            $context,
            $directoryHelper,
            $jsonEncoder,
            $configCacheType,
            $regionCollectionFactory,
            $countryCollectionFactory,
            $moduleManager,
            $customerSession,
            $customerUrl,
            $data,
            $newsLetterConfig
        );
        
    }

    public function getCheckStoreUrl(){
        // return $this->getBaseUrl() . '';
        $store = $this->_storeManager->getStore()->getCode();
        $baseUrl = $this->getBaseUrl();
        return $baseUrl . "rest/$store/V1/" . self::CHECK_NAME_PATH;
    }
}