<?php

use PHPUnit\Framework\TestCase;
use DansMaCulotte\InventoryPlanner\PurchaseOrder;

require 'Credentials.php';

class PurchaseOrderTest extends TestCase
{
    public $apiKey = API_KEY;
    public $accountId = ACCOUNT_ID;

    public function testList()
    {
        $po = new PurchaseOrder($this->apiKey, $this->accountId);
        $results = $po->list();

        print_r($results['purchase-orders']);
    }

    public function testListOpened()
    {
        $po = new PurchaseOrder($this->apiKey, $this->accountId);
        $results = $po->listOpened();

        print_r($results['purchase-orders']);
    }

    public function testGetById()
    {
        $po = new PurchaseOrder($this->apiKey, $this->accountId);
        $result = $po->getById('5bbb537c178a381aab78ec63');

        print_r($result['purchase-order']);
    }
}