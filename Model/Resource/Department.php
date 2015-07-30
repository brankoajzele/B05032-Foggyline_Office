<?php

namespace Foggyline\Office\Model\Resource;

class Department extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('foggyline_office_department', 'entity_id');
    }
}