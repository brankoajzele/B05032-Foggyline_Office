<?php

namespace Foggyline\Office\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $departmentFactory;
    protected $employeeFactory;

    public function __construct(
        \Foggyline\Office\Model\DepartmentFactory $departmentFactory,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory
    )
    {
        $this->departmentFactory = $departmentFactory;
        $this->employeeFactory = $employeeFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $salesDepartment = $this->departmentFactory->create();
        $salesDepartment->setName('Sales');
        $salesDepartment->save();

        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($salesDepartment->getId());
        $employee->setEmail('john@sales.loc');
        $employee->setFirstName('John');
        $employee->setLastName('Doe');
        $employee->setServiceYears(3);
        $employee->setDob('1983-03-28');
        $employee->setSalary(3800.00);
        $employee->setVatNumber('GB123456789');
        $employee->setNote('Just some notes about John');
        $employee->save();

        $financeDepartment = $this->departmentFactory->create();
        $financeDepartment->setName('Finance');
        $financeDepartment->save();

        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($financeDepartment->getId());
        $employee->setEmail('anna@sales.loc');
        $employee->setFirstName('Anna');
        $employee->setLastName('Doe');
        $employee->setServiceYears(5);
        $employee->setDob('1986-08-16');
        $employee->setSalary(4200.00);
        $employee->setVatNumber('GB223344556');
        $employee->setNote('Just some notes about Anna');
        $employee->save();

        $setup->endSetup();
    }
}
