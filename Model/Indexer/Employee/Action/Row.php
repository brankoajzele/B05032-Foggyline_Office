<?php

namespace Foggyline\Office\Model\Indexer\Employee\Action;

class Row extends \Foggyline\Office\Model\Indexer\Employee\AbstractAction
{
    /**
     * Execute Row reindex
     *
     * @param int|null $id
     * @throws \Magento\Framework\Exception\LocalizedException
     *
     * @return void
     */
    public function execute($id = null)
    {
        if (!isset($id) || empty($id)) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('We can\'t rebuild the index for an employee.')
            );
        }
        try {
            $this->_reindexRows([$id]);
        } catch (\Exception $e) {
            throw new \Magento\Framework\Exception\LocalizedException(__($e->getMessage()), $e);
        }
    }
}
