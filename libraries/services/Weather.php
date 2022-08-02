<?php

namespace Services;

require_once('libraries/const.php');

class Weather {

    public static function getWeather(string $location){

        $queryString = http_build_query([
        'access_key' => API_KEY,
        'query' => $location,
        ]);

        $ch = curl_init(sprintf('%s?%s', 'http://api.weatherstack.com/current', $queryString));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $json = curl_exec($ch);
        curl_close($ch);

        $api_result = json_decode($json, true);

        return $api_result;

    }

}