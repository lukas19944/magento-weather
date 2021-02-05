<?php
namespace Lukasz\Weather\Model\ResourceModel\Weather;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{

    public function _construct()
    {
        $this->_init('\Lukasz\Weather\Model\Weather', '\Lukasz\Weather\Model\ResourceModel\Weather');
    }
}
