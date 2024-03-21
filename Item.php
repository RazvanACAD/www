<?php

class Item
{
  const MAX_LENGTH = 24;

  public $name;
  public $description = "This is the default";

  public function getName(){
    return $this->name;
  }

  public function setName(){
    $this->name=$name;
  }

}
