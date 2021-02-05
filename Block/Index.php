<?php

namespace Lukasz\Weather\Block;

use Lukasz\Weather\Model\OpenWeather;
use Lukasz\Weather\Model\ResourceModel\Weather\Collection;
use Lukasz\Weather\Model\Weather;
use Monolog\Logger;

class Index extends \Magento\Framework\View\Element\Template{

    private $weather;
    private $collection;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        Weather $weather,
        Collection $collection


    )
    {
        parent::__construct($context);
        $this->weather = $weather;
        $this->collection = $collection;

    }

    public function getWeather(){

        $collection = $this->weather->getCollection()->getLastItem();

        return $collection;

    }
}
