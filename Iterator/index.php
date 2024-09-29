<?php

use Iterator\CsvIterator;

require_once "../autoloader.php";

echo "<pre>";

$csv = new CsvIterator("orders.csv");
foreach ($csv as $row) {
    print_r($row);
}