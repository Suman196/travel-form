<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUtorial</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color : rgb(189, 160, 160);
            margin: auto;

        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hey there! </h1>
        <p>This is your party status: </p>
    <?php
    //If-elese conditon
    echo "<br>";
    $age = 7;
    if($age>18)
    echo "You are allowed";
    elseif($age==7)
    echo "Youa re 7 years old so not allowed!";
    else
    echo "Don't Understand";

    //Arrays in PHP
    $lang = array("Python","C++","Java");
    echo $lang[0];
    echo "<br>";
    echo count($lang);
    //LOOps in PHP
    // $a = 0;
    // while($a<=10)
    // {
    //     echo "<br> The value of a is: ";
    //     echo $a;
    //     $a++;
    // }

    //Iterating arrays in PHP using while loop
    
    // while($a<count($lang))
    // {
    //     echo "<br> The value of language is: ";
    //     echo $lang[$a];
    //     $a++;
    // }
    //Iterating arrays in PHP using do while loop
    // $a = 20;
    // do
    // {
    //     echo "<br> The value of a is: ";
    //     echo $a;
    //     $a++;
    // }while($a<=10);

    //For Loop

    // $a = 10;//here initialize of a but it will take in for loop a value
    // for ($a=0; $a <10 ; $a++) { 
    //     echo "<br> The value of a is: ";
    //     echo $a;
    //     # code...
    // }
    // foreach ($lang as $value) {
    //     echo "<br> The value of language is: ";
    //     echo $value;
    //     # code...
    // }
    //Functions
    function print5(){
        echo "<br>FIVE";

    }
    print5();
    print5();
    print5();
    function print_number($number){
        echo "<br> The number is: ";
        echo $number;//print the number (order given)
    }
    print_number(45);



    ?>    
    </div>
</body>
</html>