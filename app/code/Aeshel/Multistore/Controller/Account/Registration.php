<?php
namespace Aeshel\Multistore\Controller\Account;

class Registration extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;

        parent::__construct($context);
    }

    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        $pageFactory->getConfig()->getTitle()->set('Seller Registration');

        $this->_view->loadLayout();
        return $pageFactory;
    }
}