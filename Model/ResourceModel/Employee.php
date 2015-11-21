<?php

namespace Foggyline\Office\Model\ResourceModel;

class Employee
    //extends \Magento\Eav\Model\Entity\VersionControl\AbstractEntity
    extends \Magento\Eav\Model\Entity\AbstractEntity
{

    protected function _construct()
    {
        $this->_read = 'foggyline_office_employee_read';
        $this->_write = 'foggyline_office_employee_write';
        //$this->_type = \Foggyline\Office\Model\Employee::ENTITY;
    }

    /**
     * Getter and lazy loader for _type
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Magento\Eav\Model\Entity\Type
     */
    public function getEntityType()
    {
        if (empty($this->_type)) {
            /* equals to eav_entity_type.entity_type_code */
            /* which further equals to /app/code/Foggyline/Office/Setup/EmployeeSetup.php, key value under the return array of getDefaultEntities method */
            $this->setType(\Foggyline\Office\Model\Employee::ENTITY); /* Here we assigned full, sor of name-spaced value for entity type */
        }
        return parent::getEntityType();
    }
//
//
//
//
//    /**
//     * Resource initialization.
//     *
//     * @return void
//     */
//    protected function _construct()
//    {
//        $this->_read = 'foggyline_office_employee_read';
//        $this->_write = 'foggyline_office_employee_write';
//        $this->_type = \Foggyline\Office\Model\Employee::ENTITY;
//
//        /**
//         * The Read and Write connection need to be named or else we get error:
//         * Fatal error: Call to a member function beginTransaction() on a non-object in /Users/branko/www/magento2-merchant/lib/internal/Magento/Framework/Model/Resource/AbstractResource.php on line 68
//         */
//
//
//    }
}
