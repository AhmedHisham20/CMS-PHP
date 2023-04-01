<?php

//           DAY (1)


// phpinfo();


// const name ='day one';
// echo "the page name is:".name;

// echo  "<br>".__FILE__."<br>";

// echo "your addres is: ".$_SERVER['SERVER_ADDR']. "<br>";
// echo  "your server name is: ".$_SERVER['SERVER_NAME']."<br>";
// echo "port : ".$_SERVER['SERVER_PORT']."<br>";

// $age = "10";

// switch ($age) {
//   case $age < "5":
//     echo "Stay at home";
//     break;
//   case "5":
//     echo "Go to Kindergarden";
//     break;
//   case $age > "5" && $age < "13":
//     echo "Go to grade";
//     break;
 
// }

//********************************************************************************************************************************************************************************************

//            DAY (2)


// Q(1)

1-echo nl2br("how to break line\nwithout using br");

// 2-echo ("how to break line<pre>\n</pre>without using br");






// Q(2)
// 1-echo htmlspecialchars_decode("") -->Converts some predefined HTML entities to characters
// 2-echo bin2hex("") -->Converts a string characters to hexadecimal values
// 3-echo chop($,"") -->Remove characters from the right end of a string


// Q(3)

foreach($_SERVER as $key => $value){
   echo  $key .'====>'.  $value .'<br>' ;
}


//  Q(4)
$Numbers = array(12, 45, 10, 25);
$total = array_sum($Numbers);
$average = $total/count($Numbers);
echo "the average is :$average <br> the plural is :$total <br>";
rsort($Numbers);
echo "sort reverse :<br>";
foreach($Numbers as $value){
    echo " $value <br>";
  }

//  Q(5)

$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
asort($age);
echo "ascending sort by value :<br>";
foreach($age as $key => $value){
  echo "key is : $key \ value is : $value <br>";
}


echo "descending sort by value :<br>";
arsort($age);
foreach($age as $key => $value){
  echo "key is : $key \ value is : $value <br>";
}

echo "ascending sort by key :<br>";
ksort($age);
foreach($age as $key => $value){
  echo "key is : $key \ value is : $value <br>";
}

echo "descending sort by key :<br>";
krsort($age);
foreach($age as $key => $value){
  echo "key is : $key \ value is : $value <br>";
}



?>
