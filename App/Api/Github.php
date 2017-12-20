<?php


namespace Api;


use Interfaces\APIInterface;

class Github implements APIInterface
{
    public function apiConnect($url)
    {
        // Open curl handle
        $ch = curl_init();

        // Send request to server
        curl_setopt($ch,CURLOPT_URL,"https://api.github.com/repos/symfony/symfony/".$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // Store result
        $content = curl_exec($ch);

        // Close handle
        curl_close($ch);

        // Cast object as array
        return (array)json_decode($content);
    }
}