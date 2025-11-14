<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection to this database failed due to ". mysqli_connect_error());
}
// echo "Successed conneting to the db";
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql = "INSERT INTO `trip`.`us_trip` ( `name`, `age`, `email`, `password`, `phone`, `other`, `dt`)
 VALUES ('$name', '$age', '$email', '$password', '$phone', '$other', current_timestamp());";
// echo $sql;

// -> this is called object operator and is used for

if($con->query($sql) == true){
    // echo "Successfully inserted";
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="img" src="img2.avif" alt="UK Trip Agancy">
    <div class="container">
        <h1>Welcome to UK Trip Form</h1>
        <p>Enter your details and submit this form to confirm your
            participation in the Trip </p>
       <?php 
       if($insert == true){
           echo "<p class='submitMsg'>Thanks For submitting your form. We are happy to see you joining us for the US Trip</p>";
       }
       ?>

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="text" name="age" placeholder="Enter Your age">
            <input type="email" name="email" placeholder="Enter Your Email Address">
            <input type="password" id="pwd" name="password" pattern="{A-Za-z0-9,$,@}" placeholder="Enter Your Password">
            <input type="tel" name="phone" placeholder="Enter Your Phone Number">
            <textarea name="other" id="dese" rows="5" cols="15"
                placeholder="Enter Any Other Information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
             
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>