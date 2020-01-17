<?php

namespace DansMaCulotte\InventoryPlanner\Resources;

class Products {

    private $items = [];

    private $requiredFiels = [
        'product_id',
        'title',
        'sku',
        'created_at',
        'stock_quantity',
        'price',
    ];

    private $optionalFields = [
        'regular_price',
        'cost_price',
        'landing_cost_price',
        'barcode',
        'updated_at',
        'managing_stock',
        'vendor',
        'permalink',
        'categories',
        'image',
        'brand',
        'options',
        'tags',
        'vendor_reference',
        'moq',
        'uom',
    ];
}