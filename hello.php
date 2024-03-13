<?php
// Control Structure

$day="Tue";

switch($day){
  case "Mon":
    echo "Monday";
    break;
  case "Tue":
    echo "Tuesday";
    break;
  case "Wen":
    echo "Wednesday";
    break;
  case "Thu":
    echo "Thursday";
    break;
  case "Fri":
    echo "Friday";
    break;
  case "Sat":
    echo "Saturday";
    break;
  case "Sun":
    echo "Sunday";
    break;
  default:
    echo "No information available for that day.";
    break;
}