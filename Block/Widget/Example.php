<?php

namespace Foggyline\Office\Block\Widget;

class Example extends \Magento\Framework\View\Element\Text implements \Magento\Widget\Block\BlockInterface
{
    protected function _beforeToHtml()
    {
        $this->setText(sprintf(
            'example widget: var1=%s, var2=%s',
            $this->getData('var1'),
            $this->getData('var2')
        ).__('Translate me')
        .__('Var1 %1, Var2 %2, Var %3', time(), date('Y'), 32)
        .__('Copyright %1 <a href="%2">Magento</a>', date('Y'), 'http://magento.com')
        );

        return parent::_beforeToHtml();
    }
}
