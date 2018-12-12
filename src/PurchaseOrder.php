<?php

namespace DansMaCulotte\InventoryPlanner;

use DansMaCulotte\InventoryPlanner\Client;

class PurchaseOrder extends Client
{
    const SERVICE_URI = '/api/v1/purchase-orders';

    /**
     * Construct Method
     * 
     * @param string $apiKey    Inventory Planner API Key
     * @param string $accountId Inventory Planner Account ID
     */
    public function __construct($apiKey, $accountId)
    {
        parent::__construct($apiKey, $accountId);
    }

    /**
     * List purchase orders
     * 
     * @return array
     */
    public function list($options = array())
    {
        $response = $this->client->request(
            'GET',
            self::SERVICE_URI,
            array(
                'query' => $options
            )
        );

        $body = json_decode((string) $response->getBody());

        return $body;
    }

    /**
     * List opened purchase orders
     * 
     * @return array
     */
    public function listOpened($options = array())
    {
        return $this->list(
            array_merge(
                $options,
                array(
                    'status' => 'OPEN'
                )
            )
        );
    }

    public function getById($id)
    {
        
    }
}
