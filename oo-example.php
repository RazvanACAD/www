<?php

require 'Item.php';

$my_item = new Item();

$my_item->setName("Item1");
$my_item->setDescription("The example desc");

echo $my_item->getName();
echo $my_item->getDescription();
