<?php
 $insert = false;
if(isset($_POST['name'])){//if it is true means if anyone give request of name then it will run


    $server = "localhost";
    $username = "root";
    $password = "";

    //connection creation
    $con = mysqli_connect($server, $username,$password);

    if(!$con){
        die("Connection to the database failed due to ". mysqli_connect_error());
    }
    // echo "Success connection to the database";
   //Insert the values to the database and make variable , we want to insert
   //requests from post those values will come to this variables
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $desc = $_POST['desc'];
   
   



   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp()); ";
//    echo $sql;

   //run those opeartion -> object operator
   if($con->query($sql) ==TRUE){
    // echo "Successfully inserted";
    $insert = true;
   }
   else{
    echo "Error: $sql <br> $con->error";
   }

   $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <img class="gn" src="gn.jpeg" alt="GNIT" srcset="">
    <div class="container">
        <h1>Welcome To GNIT US Trip Form</h1>
        <p>Enter your details to confirm your participation in this trip</p>
        <?php
        if($insert == true){
         echo"<p id='sec'>Thanks for submitting the form. We are happy to see you.</p>";
        }
         ?>
        <!-- send data like password or secret and action by which and where it is saved(backend) -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age"> 
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender"> 
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your ph.number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other info. "></textarea> 
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->


        </form>


    </div>
    <script src="index.js"></script>
   
    
</body>
</html>