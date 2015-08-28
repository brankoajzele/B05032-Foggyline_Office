<?php

namespace Foggyline\Office\Model;

class Cron
{
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function logHello()
    {
        $this->logger->info('Hello from Cron job!');
        return $this;
    }
}
