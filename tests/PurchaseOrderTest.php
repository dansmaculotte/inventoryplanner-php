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
        $results = $po->listOpened();

        print_r($results->meta);
    }
}