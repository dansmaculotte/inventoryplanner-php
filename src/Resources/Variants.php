<?php

namespace DansMaCulotte\InventoryPlanner\Resources;

use DansMaCulotte\InventoryPlanner\Client;

class Variant extends Client
{
    const SERVICE_URI = '/api/v1/variants';

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
     * List variants
     * 
     * @param array $options Filters, paging and sorting options 
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

        $body = json_decode((string) $response->getBody(), true);

        return $body;
    }

    /**
     * Get variant by Id
     * 
     * @param string $id      Variant Id to get
     * @param array  $options Filters, paging and sorting options 
     * 
     * @return array
     */
    public function getById($id, $options = array())
    {
        $response = $this->client->request(
            'GET',
            self::SERVICE_URI . '/' . $id,
            array(
                'query' => $options
            )
        );

        $body = json_decode((string) $response->getBody(), true);

        return $body;
    }

    /**
     * Get variant vendors by Id
     * 
     * @param string $id      Variant Id to get
     * @param array  $options Filters, paging and sorting options 
     * 
     * @return array
     */
    public function getVendorsById($id, $options = array())
    {
        $response = $this->client->request(
            'GET',
            self::SERVICE_URI . '/' . $id . '/vendors',
            array(
                'query' => $options
            )
        );

        $body = json_decode((string) $response->getBody(), true);

        return $body;
    }
}
