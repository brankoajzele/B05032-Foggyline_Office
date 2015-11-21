<?php

namespace Foggyline\Office\Controller\Test;

class Crud extends \Foggyline\Office\Controller\Test
{
    protected $employeeFactory;
    protected $departmentFactory;
    protected $sessionConfig;
    protected $sessionManager;
    protected $cookieMetadataFactory;
    protected $cookieManager;
    protected $logger;
    protected $cache;
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory,
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Session\Config\ConfigInterface $sessionConfig,
        \Magento\Framework\Session\SessionManagerInterface $sessionManager,
        \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager,
        \Psr\Log\LoggerInterface $logger,
        \Foggyline\Office\Model\Cache $cache
    )
    {
        $this->employeeFactory = $employeeFactory;
        $this->departmentFactory = $departmentFactory;
        $this->resultPageFactory = $resultPageFactory;
        $this->sessionConfig = $sessionConfig;
        $this->sessionManager = $sessionManager;
        $this->cookieMetadataFactory = $cookieMetadataFactory;
        $this->cookieManager = $cookieManager;
        $this->logger = $logger;
        $this->cache = $cache;

        return parent::__construct($context);
    }

    /**
     * URL like http://shop.loc/index.php/foggyline_office/test/crud/
     * http://magento2.loc/index.php/foggyline_office/test/crud/
     */
    public function execute()
    {
        //test code here

        exit('Foggyline\Office\Controller\Test\Crud');
    }
}
