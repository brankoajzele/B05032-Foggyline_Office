<?php

namespace Foggyline\Office\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $employeeSetupFactory;

    public function __construct(
        \Foggyline\Office\Setup\EmployeeSetupFactory $employeeSetupFactory
    )
    {
        $this->employeeSetupFactory = $employeeSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $employeeSetup = $this->employeeSetupFactory->create(['setup' => $setup]);

        $employeeSetup->installEntities();

        $employeeSetup->addAttribute(
            \Foggyline\Office\Model\Employee::ENTITY,
            'service_years',
            [
                'type' => 'int',
            ]
        );

        $employeeSetup->addAttribute(
            \Foggyline\Office\Model\Employee::ENTITY,
            'dob',
            [
                'type' => 'datetime',
            ]
        );

        $employeeSetup->addAttribute(
            \Foggyline\Office\Model\Employee::ENTITY,
            'salary',
            [
                'type' => 'decimal',
            ]
        );

        $employeeSetup->addAttribute(
            \Foggyline\Office\Model\Employee::ENTITY,
            'vat_number',
            [
                'type' => 'varchar',
            ]
        );

        $employeeSetup->addAttribute(
            \Foggyline\Office\Model\Employee::ENTITY,
            'note',
            [
                'type' => 'text',
            ]
        );

        $setup->endSetup();
    }
}
