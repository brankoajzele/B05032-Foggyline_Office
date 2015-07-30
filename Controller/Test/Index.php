<?php

namespace Foggyline\Office\Controller\Test;

class Index extends \Foggyline\Office\Controller\Test
{
    protected $employeeFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory
    )
    {
        $this->employeeFactory = $employeeFactory;
        return parent::__construct($context);
    }

    /**
     * URL like http://magento2-merchant.loc/index.php/foggyline_office/test/index
     */
    public function execute()
    {
        for ($i=1; $i<=5; $i++) {
            $employee = $this->employeeFactory->create();

            //Fields (or 'static' attributes)
            $employee->setDepartmentId(2);
            $employee->setEmail('user'.$i.'@email.loc');
            $employee->setFirstName('Fname'.$i);
            $employee->setLastName('Lname'.$i);

            //Attributes
            $employee->setServiceYears(rand(1,8));
            $employee->setDob(time());
            $employee->setSalary(rand(1500,4000));
            $employee->setVatNumber('HR3401183'.rand(1000, 5000));
            $employee->setNote('Just some note #'.$i);

            $employee->save();
        }

        $employees = $this->employeeFactory->create()->getCollection();
        $employees->addAttributeToSelect('*');  /* works OK */


        foreach ($employees as $employee) {
            \Zend_Debug::dump($employee->toArray());
        }

        exit('OK...');
    }
}