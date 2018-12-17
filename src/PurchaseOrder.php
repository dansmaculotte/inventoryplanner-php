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
     * List opened purchase orders
     * 
     * @param array $options Filters, paging and sorting options 
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

    /**
     * Get purchase order by Id
     * 
     * @param string $id      Purchase order Id to get
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
     * Get purchase order items by Id
     * 
     * @param string $id      Purchase order Id to get
     * @param array  $options Filters, paging and sorting options 
     * 
     * @return array
     */
    public function getItemsById($id, $options = array())
    {
        $response = $this->client->request(
            'GET',
            self::SERVICE_URI . '/' . $id . '/items',
            array(
                'query' => $options
            )
        );

        $body = json_decode((string) $response->getBody(), true);

        return $body;
    }

    /**
     * Get purchase order connections by Id
     * 
     * @param string $id      Purchase order Id to get
     * @param array  $options Filters, paging and sorting options 
     * 
     * @return array
     */
    public function getConnectionsById($id, $options = array())
    {
        $response = $this->client->request(
            'GET',
            self::SERVICE_URI . '/' . $id . '/connections',
            array(
                'query' => $options
            )
        );

        $body = json_decode((string) $response->getBody(), true);

        return $body;
    }
}
