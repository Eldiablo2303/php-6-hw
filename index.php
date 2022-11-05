 <!-- select option -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
    <?php
        $start = 2022;
        $end = 1900;
        for ($n = $start; $n >= $end; $n-- ) {
            echo "<option>$n</option>". "<br>";
        }
        ?>   
    </select>
    
</body>
</html>

<?php

//pattern with (*)

for($n = 1 ; $n <=10;$n++){
   echo str_repeat("*", $n ),"<br>"; 
}


for($n = 10 ; $n >= 1;$n--){
    echo str_repeat("*", $n ),"<br>"; 
 }

 //time table
 $number = 2;

 for($n = 1; $n <= 10 ; $n++ ){
    $result = $number * $n;
    echo "$number * $n = $result <br>";
 }

 //

$deposits = [1000,2000,1500,500,];
$arrray = [];
$balance = 0 ;
for ($n = 0; $n < count($deposits); $n++){
    $balance = $deposits[$n] + $balance;
    array_push($arrray,$balance);
}
print_r($arrray);

///factorial problem

$num = 6;
$factorial = 1;
for($n = $num;$n >= 1; $n--){
    $factorial *= $n;
     
}
echo $factorial ."<br>";

// nested for loop

for($n = 1; $n <=10; $n++){
    
    for($t = 1; $t <= 10; $t++){
       $results = $n * $t;
        echo  "$n * $t = $results"."<br>";

    }
    echo "End" . "<br>";
}

// while loop 

$n = 1;

while($n<11){
    echo $n;
    $n++;
}

// do  while loop

$n = 1;
do{
echo $n;
$n++;
}

while($n < 10);

// foreach loop

$citys = [
  'dhaka',
  'chittagong',
  'rajshahi',
  'rongpur'   
];
echo "<ul>";
foreach($citys as $city){ 
    echo "<li>$city</li>" ;
}
echo "</ul>" ;

// 

$users = [
    [
        'id' => 1,
        'name' => 'jhon' ,
        'email' => 'test1@gmail.com',  
    ],
    [
        'id' => 2,
        'name' => 'karim' ,
        'email' => 'test2@gmail.com',  
    ],
    [
        'id' => 3,
        'name' => 'rahim' ,
        'email' => 'test3@gmail.com',  
    ],


];
foreach($users as $key => $user) {
    if ($key < 3){
        echo $key. $user ['email']. "<br>";
    } else {
        break;
    }
}
?>
 
<!-- super global variable -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form action="./controller/login.php" method="POST">
            <label for="Sign in">Enter Credentials</label>
            <input type="text" name="username"  placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit" value="Login">Login</button>                
        </form>

</body>
</html>
