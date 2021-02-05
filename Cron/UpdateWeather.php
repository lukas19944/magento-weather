<?php

namespace Lukasz\Weather\Cron;

use Lukasz\Weather\Model\OpenWeather;
use Lukasz\Weather\Model\Weather;
use Psr\Log\LoggerInterface;

class UpdateWeather{


    /**
     * @var OpenWeather
     */
    private $openWweather;

    /**
     * @var Weather
     */
    private $weather;

    /**
     * @var \Lukasz\Weather\Model\ResourceModel\Weather
     */
    private $weatherResource;

    public function __construct(
        Weather $weather,
        \Lukasz\Weather\Model\ResourceModel\Weather $weatherResource,
        OpenWeather $openWeather,
        LoggerInterface $logger

    )
    {
        $this->weather = $weather;
        $this->weatherResource = $weatherResource;
        $this->openWweather = $openWeather;

        $this->logger = $logger;
    }

    public function execute(){
        $this->logger->info('cron works');

        $weather = $this->openWweather->getWeather();
        $data = ['temperature'=>$weather->temp, 'pressure'=>$weather->pressure, 'humidity'=>$weather->humidity];

        $weatherModel = $this->weather;
        $weatherModel->setData($data);
        $weatherModel->save();

        return $this;

//        $this->weatherResource->save($weatherModel);




    }

}
