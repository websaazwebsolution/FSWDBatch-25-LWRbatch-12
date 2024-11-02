<?php 



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
$users = [
    ['name' => 'abdullah', 'password' => '123'],
    ['name' => 'khalid', 'password' => '794'],
    ['name' => 'bilal', 'password' => '6544'],

];

    $name = $_POST['login'];
    $password = $_POST['password'];

    foreach($users as $user){
        if($user['name'] ===  $name  && $user['password'] === $password){
            header('location:welcome.php');
            break;
        }else{
           echo "error";
        }
    }




}




// echo $name . "    " . $password;







// $user = "abdullah";
// $user2 = "khalid";
// $user3 = "bilal";
// $user = ["abdullah","khalid","bilal"];

// $users = [
//     ['name' => 'abdullah', 'password' => '123'],
//     ['name' => 'khalid', 'password' => '794'],
//     ['name' => 'bilal', 'password' => '6544'],

// ];


// foreach($users as $user){
//     echo "<pre>";
//     echo $user['name'] . " ";
//     echo $user['password']."<br>";
//     echo "</pre>";
// }



// echo "<pre>";
// print_r($user);
?>