<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
    <?php
    define('PI',3.14);
        echo "Hello there";
    // // secret algorithm
    // $variable1 = 34;
    // $variable2 = 45;
    // echo $variable1;
    // echo $variable2;

    // echo $variable1 + $variable2;
    // //Operators in PHP
    // //Arithmetic operator
    // echo "variable1 + variable2: ";
    // echo"<br>";//break the line
    // echo $variable1 + $variable2;

    // //Assignment Operator
    // $newvar = $variable1;
    // // $newvar +=1; //increment by 1 of newvar
    // $newvar -=1; //Decrement by 1 of newvar
    // echo "The value of newvar is :";
    // echo $newvar;
    
    // // echo "<h1> Comparison Operator </h1>"
    // //Comparison Operator
    // echo "The value 1==4 is: ";
    // echo var_dump(1==4);

    // //Increment /Decrement Operator
    // $variable1++;
    // $variable2--;
    // echo"<br>";
    // echo $variable1++;
    // echo"<br>";
    // echo $variable1;

    // //Logical Operators
    // // and (&&)
    // // or(||)
    // // XOR 
    // //!
    // echo"<br>";
    // $myvar = (true) and (true);
    // echo var_dump($myvar);


    ?>

    <?php
    
    //Data Types in PHP
    // 1. Integer
    // 2. String
    // 3. Boolean
    // 4. Float
    // 5. Array
    // 6. Object

    //Data types with value
    $var = 5;
    echo var_dump($var);
    echo "<br>";

    echo PI;//print the value of pi predefined

       
       
    
    ?>
    </div>
    
    
</body>
</html>