# Inventory Planner API PHP SDK

Please refer to Inventory Planner documentation for API specifications.

[Documentation](http://help.inventory-planner.com/using-inventory-planner/inventory-planner-api/inventory-planner-public-api)

## Installation

You can install the package via composer:

``` bash
composer require dansmaculotte/inventoryplanner-php
```

## Usage

### Purchase Order

#### List purchase orders

```php
use DansMaCulotte\InventoryPlanner\PurchaseOrder;

$po = new PurchaseOrder(API_KEY, ACCOUNT_ID);
$results = $po->list();

print_r($results['purchase-orders']);
```

#### Get opened purchase orders

```php
use DansMaCulotte\InventoryPlanner\PurchaseOrder;

$po = new PurchaseOrder(API_KEY, ACCOUNT_ID);
$results = $po->listOpened();

print_r($results['purchase-orders']);
```

#### Get purchase order by Id

```php
use DansMaCulotte\InventoryPlanner\PurchaseOrder;

$po = new PurchaseOrder(API_KEY, ACCOUNT_ID);
$results = $po->getById('aaaaaabbbbbbccccccdddddd');

print_r($results['purchase-order']);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
