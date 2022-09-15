<?php


// $name = 'odc'; 
// $phone = 01112313123;
// $status = true;
// $price = 22.5;
// $items = ['red','green','blue'];

// echo gettype($price);
// ================================ 
// this code 

/* 
mohamdwd
awdawdwd
awdwawdw
*/

// echo 10  10;

// echo 20 < 30; /// true


// $x = 20;
// $x = 30;
// $x = 0;
// $X = 10;
// echo $X;

// $y = 30;

// echo $y > $x;



// $age = 20;
// echo $age > 15; // true


// if(20 < 30){
//     echo "odc";
// }else{
//     echo "false";
// }


// if(20 < 30):
//     echo "odc";
// else:
//     echo "false";    
// endif;    


// if(30<20)
//     echo "odc";







// echo (20<30) ? "odc" : "false";





$d = 150;




// if($d <= 50):
//     echo "شايل اوبح";
// elseif($d >= 50 && $d <= 75):
//     echo "b";
// elseif($d >= 76 && $d <= 95):
//     echo "a";
// elseif($d>95 && $d <= 100):
//     echo "a+";
// else:
//     echo "nofound";
// endif;


// if($d <= 50){
//     echo "شايل اوبح";
// }elseif($d >= 50 && $d <= 75){
//     echo "b";
// }elseif($d >= 76 && $d <= 95){
//     echo "a";
// }elseif($d>95 && $d <= 100){
//     echo "a+";
// }else{
//     echo "not found";
// }






// $name = "mohamed";

// switch($name){
//     case "ahmed":
//         echo "name is ahmed";
//     break;   
//     case "mohamed":
//         echo "name is mohamed";
//     break;    
//     case "eslam":
//         echo "name is eslam";
//     break;   
//     default:
//         echo "not found";
// }



// 80 = 2 , 90 = 3 , 95 = 5

$l = 30;
$oil = 95;



// switch($oil):
//     case 90:
//         echo $l * 3;
//      break;  
//      case 80:
//         echo $l * 2;
//      break; 
//      case 95:
//         echo $l * 5;
//      break;
//      default:
//      echo "notfound";  
// endswitch;




//            0         , 1 , 2
// $person = ['mohamed amr',27,'cairo'];
// echo $person[2];

$person = [
    "mohamed",
    27,
    "cairo",
    "amr"
];
// echo $person[0];
// echo $person[1];
// echo $person[2];

// $i=0;
// while($i>count($person)){
//     echo $person[$i]."<br>";
//     $i++;
// }

// echo count($person);



// for($i=0;$i<count($person);$i++){
//     echo $person[$i]."<br>";
// }


// $i=0;
// do{
//     echo $person[$i]."<br>";
//     $i++;
// }while($i>count($person));


// $numbers = [100,1,3,5];

// $max = $numbers[0];
// for($i=0;$i<count($numbers);$i++){
//     if($max < $numbers[$i]){
//         $max = $numbers[$i];
//     }
// }

// echo $max;

// echo max($numbers);


// $name = "2232";

// echo gettype();
// echo (int) $name;







// $numbers = [10,32,3,1,65,2,40,5];

// $target = 10;
// $count = 0;
// for($i=0;$i<count($numbers);$i++){
//     if($numbers[$i] == $target){
//         echo "found"."<br>";
//     }elseif($numbers[$i] != $target){
//         echo "not found"."<br>";
//     }   
// }

// echo $count;


// $numbers  = [123,12312,123,123];


// $person = ["name"=>'mohamed',"lname"=>'amr',"age"=>27,"city"=>'cairo'];



// $person = [
//     "name" => "mohamed",
//     'lname'=>"amr",
//     "age"=>27,
//     "city"=>"cairo"
// ];



$persons = [
    [
        "name"=>"mohamed",
        "age"=>20
    ],
    [
        "name"=>"eslam",
        "age"=>30
    ],
    [
        "name"=> "radwa",
        "age"=>10
    ]
];


// for($i=0;$i<count($persons);$i++){
//     $values = array_values($persons[$i]);
//     $keys = array_keys($persons[$i]);
//     for($x=0;$x<count($values);$x++){
//         echo $keys[$x]." : ".$values[$x]."<br>";
//     }
//     echo "<hr>";
// }

// foreach($persons as $person){
//     foreach($person as $key => $value){
//         echo $key." : ".$value."<br>";
//     }
//     echo "<hr>";
// }


// name : mohamed 
//  age : 20 
//  --------------------------
// name : eslam 
//  age : 30 
//------------------
// name : radwa 
//  age : 10 


// echo $persons[2]['name'];
// echo "<pre>";
// print_r($persons);
// echo "</pre>";


// echo "test";





// $keys =  array_keys($person);
// print_r($keys);
// for($i=0;$i<count($person);$i++){
//     echo $person[$keys[$i]]."<br>";
// }

// $values = [10,230,230];
// $count = count($values);
// for($i=0;$i<$count;$i++){
//         echo $values[$i]."<br>";
// }







// $accounts = [
//     [123,23,4],
//     [1,6,2],
//     [654,23,8]
// ];

// $max = 0;
// foreach($accounts as $x){
//     $sum = 0;
//     foreach($x as $n){
//         $sum += $n; 
//         if($sum > $max){
//             $max = $sum;
//         }
        
//     }
// }

// echo $max;



// $max = [];
// foreach($accounts as $k => $a){
//      $sum = 0;   
//     foreach($a as $value){
//         $sum += $value; 
//         $max[$k] = $sum;
//     }
  
// }

// echo max($max);
// // print_r($max);





// $colors = ["red","green"];


// print_r($colors);


// // echo array_pop($colors)."<br>";
// // echo array_pop($colors)."<br>";
// // print_r($colors);

// while($c = array_pop($colors)){
//     echo $c."<br>";
// }


// print_r($colors);

// for(;$c = array_pop($colors);){
//     echo $c."<br>";
// }










$n = 10;
//  3 'fizz'
//  5 'buzz'
// 3,5 'fizzbuzz



// $n = 15;

// for($i=1;$i<=$n;$i++){
//     if($i%3 == 0 && $i%5==0){
//         echo "fizzbuzz"."<br>";
//     }elseif($i%5 == 0 ){
//         echo "buzz"."<br>";
//     }elseif($i%3 == 0){
//         echo "fiz"."<br>";
//     }else{
//         echo $i."<br>";
//     }
// }













// print_r($_POST);


// echo $_POST['x'] + $_POST['y'];


// for($i=0;$i<=100;$i++){
//     if($i == $_POST['x']){
//         echo $_POST['y']."<br>";
//     }else{
//         echo $i."<br>";
//     }
// }



// print_r($_GET);







// return
// function plus($x,$y){
//     echo $x + $y;
// }

// echo plus(10,4);
// echo 10 + plus(10,20);








// function changeip($ip,$sp){
//     $count =  strlen($ip);

//     for($i=0;$i<$count;$i++){
//         if($ip[$i] == "."){
//             $ip[$i] = $sp;
//         }
//     }
//     return $ip;
// }
// $ip = "255.100.50.1";
// echo changeip($ip,"");
// echo str_replace(".","*",$ip);



// $s = ["m","o","h","m","e","d"];

// function  array_rev($s){
//     $x  = [];
//     while($item = array_pop($s)){
//         $x[] = $item;
//     }
//     // for($i=count($s)-1;$i>=0;$i--){
        
//     // }
//     return $x;
// }


// print_r(array_rev($s));











// function increment(&$number){
//     return ++$number;
// }
// $x = 10;
// echo increment($x); //11
// echo "<hr>";
// echo $x; //11
// array_pop()/




// $_REQUEST;
// print_r($_REQUEST);



// print_r($_POST);

// echo "<hr>";

// $imgname = $_FILES['img']['name'];
// $array_name =  explode(".",$imgname);

// $ext = end($array_name);

// $imgname = $_POST['name'];
// $tmp = $_FILES['img']['tmp_name'];

// move_uploaded_file($tmp,"images/".$imgname.".".$ext);


// $text = "mohamed,ahmed,eslam";

// $array =  explode(",",$text);


// print_r($array);

// foreach($_FILES['img']['name']){

// }


// $imagescount = count($_FILES['img']['name']);
// for($i=0;$i<$imagescount;$i++){

//     $imagename = $_FILES['img']['name'][$i];
//     $tmp = $_FILES['img']['tmp_name'][$i];
//     move_uploaded_file($tmp,"images/".$imagename);
// }



// $x = 10;


// echo $x;



//  sessions 
// session_start();

// $_SESSION['x'] = 10;

// $_SESSION['name'] = "mohamed";

// print_r($_SESSION);






//  include 
// include_once 
// require
// require_once

include "lib.php";


add(1,2);


echo $x;



