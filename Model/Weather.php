<?php
namespace Lukasz\Weather\Model;

use Magento\Framework\Model\AbstractModel;

class Weather extends AbstractModel{

    protected function _construct()
    {
        $this->_init(\Lukasz\Weather\Model\ResourceModel\Weather::class);
    }

}
