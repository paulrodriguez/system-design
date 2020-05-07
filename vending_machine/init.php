<?php
require_once __DIR__.'/vendor/autoload.php';

get_declared_classes();
use VendingMachine\ItemFactory;

for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}
