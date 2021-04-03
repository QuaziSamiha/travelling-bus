<?php
    // set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // create a database connection
    // securely connecting with database
    $connection_variable = mysqli_connect($server, $username, $password); // mysqli_connect() is function

    // check for connection success
    // mysqli_connect_error() is function
    if(!$connection_variable){
        die("connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "successfully connected to the db";

        // SQL query:
        /* INSERT INTO `reservation` (`pnr_no`, `no_of_seats`, `address`, `contact_no`, `current_status`) 
         VALUES ('100000001', '3', '108//3 Upashahar,Rajshahi', '0130439822', 'student'); */

         // collect post variables
         $pnr = $_POST['pnr'];
         $seat = $_POST['seat'];
         $address = $_POST['address'];
         $phn = $_POST['phn'];
         $status = $_POST['status'];
         $sql_query = "INSERT INTO `lab_4_travels`.`reservation` (`pnr_no`, `no_of_seats`, `address`, `contact_no`, `current_status`) 
         VALUES ('$pnr', '$seat', '$address', '$phn', '$status');";
        //  echo $sql_query;
    
    // execute the query
    // query() is function
    if($connection_variable->query($sql_query) == true){
        // echo "successfully inserted";
    }
    else{
        // echo "error: $sql_query <br> $connection_variable->error";
    }

    $connection_variable->close(); // close the database connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- adding css file -->
    <link rel="stylesheet" href="style.css">
    <!-- for font style using google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Travelling by Bus</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <h4>Enter Your Details to Reserve Your Seat</h4>
        <form action="index.php" method="POST">
            <p>PNR No:</p>
            <input type="text" name="pnr" placeholder="Enter your pnr no...">
            <p>No. of Seats:</p>
            <input type="text" name="seat" placeholder="Enter number of seat...">
            <p>Address:</p>
            <input type="text" name="address" placeholder="Enter your address...">
            <p>Contact No:</p>
            <input type="text" name="phn" placeholder="Enter your contact-no...">
            <p>Status:</p>
            <input type="text" name="status" placeholder="Enter your status...">
            <br><button class="btn" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>











<!-- pnr = passenger name record
pnr is a unique code of 10 digit
pnr is used to track a ticket
passenger name,age,gender; ticket no,transport no, date of journey, payment details
-->