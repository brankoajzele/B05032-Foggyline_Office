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
     * Url like http://magento2.ce/index.php/foggyline_office/test/crud/
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();


//
//        $model = $this->_objectManager->create('Magento\Customer\Model\Address');
//        $model->load(21);
//        $model->setCity('Update London');
//        $model->save();
//
//
//
//
//
//
//        exit('7');



//        $cookieValue = 'Just some value';
//        $cookieMetadata = $this->cookieMetadataFactory
//            ->createPublicCookieMetadata()
//            ->setDuration(3600)
//            ->setPath($this->sessionConfig->getCookiePath())
//            ->setDomain($this->sessionConfig->getCookieDomain())
//            ->setSecure($this->sessionConfig->getCookieSecure())
//            ->setHttpOnly($this->sessionConfig->getCookieHttpOnly());
//
//        $this->cookieManager
//            ->setPublicCookie('cookie_name_1', $cookieValue, $cookieMetadata);


//        $this->messageManager->addSuccess('Success-1');
//        $this->messageManager->addSuccess('Success-2');
//        $this->messageManager->addNotice('Notice-1');
//        $this->messageManager->addNotice('Notice-2');
//        $this->messageManager->addWarning('Warning-1');
//        $this->messageManager->addWarning('Warning-2');
//        $this->messageManager->addError('Error-1');
//        $this->messageManager->addError('Error-2');

        return $resultPage;
    }
}
