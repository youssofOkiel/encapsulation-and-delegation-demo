<?php
require 'Model\Warehouse.php';

use Model\ItemSpec;
use Model\Warehouse;

$warehouse = new Warehouse();

// Dummy entry
$itemSpecs = new ItemSpec('chees', 10.0, 'green');
$itemSpecs2 = new ItemSpec('meat', 280, 'blue');

$warehouse->addItem($itemSpecs);
$warehouse->addItem($itemSpecs2);

$searchItemSpec = new ItemSpec('meat', 270);

echo "<pre>";
    print_r($warehouse->getItems());
    print_r($warehouse->search($searchItemSpec));
echo "</pre>";