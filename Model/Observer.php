<?php

namespace Foggyline\Office\Model;

class Observer
{
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function logCustomerEmail($observer)
    {
        //$password = $observer->getEvent()->getPassword();
        $customer = $observer->getEvent()->getModel();
        $this->logger->info($customer->getEmail());
    }
}
