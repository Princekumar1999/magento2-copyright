<?php
namespace Unit1\Copyright\Block\Html;
/**
 * Customise copyright information and return to the copyright section of the footer.
 *
 * @return string
 */
class CustomFooter extends \Magento\Theme\Block\Html\Footer
{
    public function getCopyright()
    {
        if (!$this->_copyright) {
            $this->_copyright = $this->_scopeConfig->getValue(
                'design/footer/copyright',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
        $this->_copyright = $this->_copyright . ' Hello World';
        return __($this->_copyright);
    }
}
