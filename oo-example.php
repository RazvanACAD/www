<?php

require 'Item.php';

$my_item = new Item('Huge', 'A big item');

Item::showCount();

$my_item->name="A new name";

echo $my_item->getName();
