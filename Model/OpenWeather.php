<?php

namespace Lukasz\Weather\Model;

class OpenWeather {

    const API_KEY = '3c1d233c9b0f0bc71f3f909a2a817efd';
    const CITY = "Lublin";
    const API_URL = 'api.openweathermap.org/data/2.5/weather';


    /**
     * Constructor.
     *
     * @param Magento\Framework\HTTP\Client\Curl $curl
     */
    public function __construct(
        \Magento\Framework\HTTP\Client\Curl $curl
    )
    {
        $this->curl = $curl;
    }

    public function getWeather(){
        $url = self::API_URL.'?q='.self::CITY.'&units=metric&appid='.self::API_KEY;

        $this->curl->get($url);

        $result=json_decode($this->curl->getBody());

        return $result->main;
    }

}
