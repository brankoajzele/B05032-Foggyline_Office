<?php

namespace Foggyline\Office\Model\Indexer;

class Employee implements \Magento\Indexer\Model\ActionInterface, \Magento\Framework\Mview\ActionInterface
{


//    /**
//     * @var \Foggyline\Office\Model\Indexer\Employee\Action\Row
//     */
//    protected $employeeIndexerRow;
//
//    /**
//     * @var \Magento\CatalogInventory\Model\Indexer\Stock\Action\Rows
//     */
//    protected $employeeIndexerRows;
//
//    /**
//     * @var \Magento\CatalogInventory\Model\Indexer\Stock\Action\Full
//     */
//    protected $employeeIndexerFull;
//
//    /**
//     * @param Employee\Action\Row $employeeIndexerRow
//     * @param Employee\Action\Rows $employeeIndexerRows
//     * @param Employee\Action\Full $employeeIndexerFull
//     */
//    public function __construct(
//        \Foggyline\Office\Model\Indexer\Employee\Action\Row $employeeIndexerRow,
//        \Foggyline\Office\Model\Indexer\Employee\Action\Rows $employeeIndexerRows,
//        \Foggyline\Office\Model\Indexer\Employee\Action\Full $employeeIndexerFull
//    ) {
//        $this->employeeIndexerRow = $employeeIndexerRow;
//        $this->employeeIndexerRows = $employeeIndexerRows;
//        $this->employeeIndexerFull = $employeeIndexerFull;
//    }
//
//    /**
//     * Execute full indexation
//     *
//     * @return void
//     */
//    public function executeFull()
//    {
//        $this->employeeIndexerFull->execute();
//    }
//
//    /**
//     * Execute partial indexation by ID list
//     *
//     * @param int[] $ids
//     * @return void
//     */
//    public function executeList(array $ids)
//    {
//        $this->employeeIndexerRows->execute($ids);
//    }
//
//    /**
//     * Execute partial indexation by ID
//     *
//     * @param int $id
//     * @return void
//     */
//    public function executeRow($id)
//    {
//        $this->employeeIndexerRow->execute($id);
//    }
//
//    /**
//     * Execute materialization on ids entities
//     *
//     * @param int[] $ids
//     * @return void
//     * @api
//     */
//    public function execute($ids)
//    {
//        $this->employeeIndexerRows->execute($ids);
//    }
    /**
     * Execute full indexation
     *
     * @return void
     */
    public function executeFull()
    {
        echo 'executeFull'.PHP_EOL;
    }

    /**
     * Execute partial indexation by ID list
     *
     * @param int[] $ids
     * @return void
     */
    public function executeList(array $ids)
    {
        echo 'executeList'.PHP_EOL;
        var_dump($ids);
        echo PHP_EOL;
    }

    /**
     * Execute partial indexation by ID
     *
     * @param int $id
     * @return void
     */
    public function executeRow($id)
    {
        echo 'executeRow'.PHP_EOL;
        var_dump($id);
        echo PHP_EOL;
    }

    /**
     * Execute materialization on ids entities
     *
     * @param int[] $ids
     * @return void
     * @api
     */
    public function execute($ids)
    {
        echo 'execute'.PHP_EOL;
        var_dump($ids);
        echo PHP_EOL;
    }
}
