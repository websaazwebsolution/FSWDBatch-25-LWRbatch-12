<?php 

if(isset($_GET['marks'])){

    $marks = $_GET['marks'];

    if(empty($marks)){
        // echo "enter numbers please";
        header('location:form.php?error=enter numbers please');

    }else{

       if($marks > 100){
        header('location:form.php?error=Max value is 100');     
       }
       else{
        $grade = '';

        if($marks >=60){
            $grade = "first division";
        }elseif($marks >=50){
            $grade = "second division";
        }elseif($marks >=40){
            $grade = "third division";
        }else{
            $grade = 'fail';
        }

        $grade =  "<h1> your grade : $grade</h1>";

        header('location:form.php?grade='.$grade);
       }
    }




}else{
    header('location:form.php');
}





?>