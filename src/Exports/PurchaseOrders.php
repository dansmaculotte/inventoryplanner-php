<?php

namespace DansMaCulotte\InventoryPlanner\Resources;

class PurchaseOrders {

    private $items = [];

    private $requiredFiels = [
        'po_id',
        'date',
        'expected_date',
        'product_id',
        'sku',
        'cost_price',
        'status',
        'ordered',
        'received',
    ];

    private $optionalFields = [
        'po_name',
        'vendor',
        'currency',
        'tax',
        'tax_included',
    ];

    public function __construct() {

    }

    public function addProducts() {

    }
}