<?php

namespace DansMaCulotte\InventoryPlanner;

use GuzzleHttp\Client as HttpClient;

// http://help.inventory-planner.com/using-inventory-planner/inventory-planner-api/inventory-planner-public-api
class Client
{
    const API_URL = 'https://app.inventory-planner.com';

    public $client;

    /**
     * Construct Method
     * 
     * @param string $apiKey    Inventory Planner API Key
     * @param string $accountId Inventory Planner Account ID
     */
    public function __construct($apiKey, $accountId)
    {
        $this->client = new HttpClient(
            [
                'base_uri' =>  self::API_URL,
                'headers' => array(
                    'Authorization' => $apiKey,
                    'Account' => $accountId,
                ),
            ]
        );
    }
}