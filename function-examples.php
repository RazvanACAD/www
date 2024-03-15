<?php

function getMessage($morning){
  if($morning){
    return "Good morning";
  }else{
    return "Goode afternoon";
  }
}

$message = getMessage(false);
echo $message;