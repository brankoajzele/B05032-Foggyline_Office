<?php

namespace Foggyline\Office\Model\ResourceModel\Employee;

class Collection
    extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
    //extends \Magento\Eav\Model\Entity\Collection\VersionControl\AbstractCollection
{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee', 'Foggyline\Office\Model\ResourceModel\Employee');
    }
}
