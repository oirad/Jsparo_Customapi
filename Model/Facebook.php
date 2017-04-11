<?php
namespace Jsparo\Customapi\Model;

use Jsparo\Customapi\Helper\Data;
use Jsparo\Customapi\Api\FacebookInterface;

class Facebook implements FacebookInterface {

    private $helper;

    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    public function getUrl() {
        return $this->helper->getFacebookUrl();
    }
}
