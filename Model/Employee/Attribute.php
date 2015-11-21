<?php

namespace Foggyline\Office\Model\Employee;

/**
 * Office attribute model
 *
 * @method int getSortOrder()
 */
class Attribute extends \Magento\Eav\Model\Entity\Attribute
{
    /**
     * Init resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\ResourceModel\Employee\Attribute');
    }
}
