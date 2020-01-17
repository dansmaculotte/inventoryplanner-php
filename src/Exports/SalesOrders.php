<?php

namespace DansMaCulotte\InventoryPlanner\Resources;

class SalesOrders {

    private $items = [];

    private $requiredFiels = [
        'order_number',
        'product_id',
        'sku',
        'date',
        'price',
        'quantity',
    ];

    private $optionalFields = [
        'currency',
        'canceled',
    ];
}