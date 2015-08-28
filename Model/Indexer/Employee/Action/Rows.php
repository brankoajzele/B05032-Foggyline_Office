<?php

namespace Foggyline\Office\Model\Indexer\Employee\Action;

class Rows extends \Foggyline\Office\Model\Indexer\Employee\AbstractAction
{
    /**
     * Execute Rows reindex
     *
     * @param array $ids
     * @throws \Magento\Framework\Exception\LocalizedException
     *
     * @return void
     */
    public function execute($ids)
    {
        if (empty($ids)) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('Could not rebuild index for empty employee array')
            );
        }
        try {
            $this->_reindexRows($ids);
        } catch (\Exception $e) {
            throw new \Magento\Framework\Exception\LocalizedException(__($e->getMessage()), $e);
        }
    }
}
