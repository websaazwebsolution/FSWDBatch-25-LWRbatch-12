<?php 

// print_r($_POST);

include_once 'conn.php';




$username = htmlspecialchars($_POST['username']);
$email =  $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$contact = $_POST['contact'];

echo $username ;
// $sql = "INSERT INTO user
//        (user_name, user_eamil, user_password, user_address, user_contact) 
//        VALUES ('$username', '$email', '$password', '$address', '$contact')";


// if($mysql->query($sql) === TRUE){
//     header("location: ../userlist.php");
//     echo "New record created successfully";
// }else{
//     echo "Error: " . $sql . "<br>" . $mysqli->error;
// }




// echo $contact;
?>