<?php

namespace Foggyline\Office\Model\Resource\Department;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\Resource\Department'
        );
    }
}
