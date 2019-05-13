<?php

namespace Sensukho\AdminDashboard\Block\Adminhtml\Dashboard;

class Index extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
    }
    
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Sensukho_AdminDashboard::dashboard');
    }

	public function sayHello()
	{
		return __('Ola k ase?');
	}
}
