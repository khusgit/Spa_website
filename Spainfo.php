<!DOCTYPE html>
<html>
<head>
    <title> Insert Page</title>
</head>
<body>
    <center>
<?php


$servername = "localhost";
$username = "root";
$password = "root";
$database = "Spa";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("login failed: " . $conn->connect_error);
}
//echo "login successfully";


        // Taking all 18 values from the form data(input)

         $from1 =  $_REQUEST['from1'];
        $first_name= $_REQUEST['first_name'];
        $last_name= $_REQUEST['last_name'];
       // $last_name= $_REQUEST['last_name'];
        $dob = $_REQUEST['dob'];
        $email = $_REQUEST['email'];
/*
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
*/
        $gender = $_REQUEST['gender'];
        $therapist = $_REQUEST['therapist'];
       $phone_number = $_REQUEST['phone_number'];
        $address = $_REQUEST['address'];
        $therapy = $_REQUEST['therapy']; 
        $times = $_REQUEST['times'];
        $meeting_time = $_REQUEST['meeting_time'];
        $meeting_time1 = $_REQUEST['meeting_time1']; 
        $payment = $_REQUEST['payment'];
        $amount= $_REQUEST['amount'];
        $discount= $_REQUEST['discount'];
        $date =Date('d/m/y');

        echo"from1".$from1;
        echo"first_name".$first_name;
        echo"last_name".$last_name;
        echo"dob".$dob;
        echo"email".$email;
        echo"gender".$gender;
        echo"therapist".$therapist;
        echo"phone_number".$phone_number;
        echo"address".$address;
        echo"therapy".$therapy;
        echo"times".$times;
        echo"meeting_time".$meeting_time;
        echo"meeting_time1".$meeting_time1;
        echo"payment".$payment;
        echo"amount".$amount;
        echo"discount".$discount;
        echo"date".$date;
        $id=0;

         // Performing insert query execution
    
        $sql1 = "INSERT INTO treat VALUES ('$id','$from1','$first_name','$last_name','$dob','$email','$gender','$therapist','$phone_number','$address','$therapy','$times','$meeting_time','$meeting_time1','$payment','$amount','$discount','$date')";


        if(mysqli_query($conn, $sql1)){
              echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";
                echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
         echo "<script>window.close();</script>"; 
  echo '<script>window.location.href = "dashboard.php";</script>';
           

        
              //  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        
//echo '<script>window.location.href = "index.php";</script>';
           
        } else{
            echo "ERROR: Hush! Sorry $sql1. " 
                . mysqli_error($conn);
        }
       
    ?>
</center>
</body>
</html>


          
        
        
    
          
