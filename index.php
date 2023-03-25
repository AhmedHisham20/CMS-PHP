<?php
// phpinfo();


const name ='day one';
echo "the page name is:".name;

echo  "<br>".__FILE__."<br>";


echo "your addres is: ".$_SERVER['SERVER_ADDR']."<br>";
echo "your server name is: ".$_SERVER['SERVER_NAME']."<br>";
echo "port : ".$_SERVER['SERVER_PORT']."<br>";

$age = "10";

switch ($age) {
  case $age < "5":
    echo "Stay at home";
    break;
  case "5":
    echo "Go to Kindergarden";
    break;
  case $age > "5" && $age < "13":
    echo "Go to grade";
    break;
 
}




?>