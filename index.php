<?php

require_once 'vendor/autoload.php';

use \Controller\APIController as APIController;
use \Api\Github as Github;

// Url to pull information from.
$url = "pulls";

$api = new APIController(new Github);
$api = $api->getApi();

// Return output to browser
print_r($api->apiConnect($url));