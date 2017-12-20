<?php


namespace Controller;

use Interfaces\APIInterface;

class APIController
{
    private $apiConnection;

    public function __construct(APIInterface $apiConnection){
        $this->apiConnection = $apiConnection;
    }

    public function getApi(){
        return $this->apiConnection;
    }
}