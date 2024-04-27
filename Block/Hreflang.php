<?php

namespace Wgerenutti\MultiSiteMetaTag\Block;

use Magento\Framework\View\Element\AbstractBlock;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Cms\Model\Page;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Hreflang extends AbstractBlock
{
    protected $storeManager;
    protected $page;
    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\View\Element\Context $context,
        StoreManagerInterface $storeManager,
        Page $page,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
        $this->page = $page;
        $this->scopeConfig = $scopeConfig;
    }

    protected function _toHtml()
    {
        $html = '';
        $stores = $this->storeManager->getStores();
        foreach ($stores as $store) {
            $url = $store->getBaseUrl() . $this->page->getIdentifier();
            $localeCode = $this->scopeConfig->getValue('general/locale/code', \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store->getCode());
            $html .= '<link rel="alternate" hreflang="' . $localeCode . '" href="' . $url . '"/>';
        }
        return $html;
    }
}
