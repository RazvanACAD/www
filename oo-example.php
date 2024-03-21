<?php

require 'Item.php';
require 'Book.php';

$item = new Item();

//echo $item->code;

$book = new Book();

echo $book->getCode();