<?php

namespace Foggyline\Office\Block;

class Hello extends \Magento\Framework\View\Element\Template
{
    public function helloPublic()
    {
        return 'Hello #1';
    }

    protected function helloProtected()
    {
        return 'Hello #2';
    }

    private function helloPrivate()
    {
        return 'Hello #3';
    }
}