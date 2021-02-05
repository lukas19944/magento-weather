<?php

namespace Lukasz\Weather\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Weather extends AbstractDb{

    public function _construct()
    {
        $this->_init('lukasz_weather', 'weather_id');
    }
}
