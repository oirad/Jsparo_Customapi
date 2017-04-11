<?php
namespace Jsparo\Customapi\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {

    const prefix = 'jsparo_social/';
    private function moduleConfig($key) {
        return $this->scopeConfig->getValue(self::prefix . $key);
    }

    public function getFacebookUrl() {
        return $this->moduleConfig('facebook/url');
    }
}
