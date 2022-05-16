<?php
include "connect.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$department = $_POST['depart'];

$btt = $_POST['submit'];

if($btt == "submit"){

    
$query = "INSERT INTO employee (Fname,Lname,phone,salary,department) VALUES ('$fname', '$lname','$phone','$salary','$department')" ;


if(mysqli_query($conn,$query)){

    echo 'True';
}else{
    echo 'false';
}


}
else if ($btt == 'update'){
    $query2 = "UPDATE employee SET Fname = '$fname', Lname = '$lname', phone = '$phone', salary ='$salary', department = '$department' WHERE ID=3"; 


    if(mysqli_query($conn,$query2)){

        echo 'Update True';
    }else{
        echo 'Update false';
    }
}
else if($btt == 'delete'){

    $query3 = "DELETE FROM employee WHERE ID = 5";

    if(mysqli_query($conn,$query3)){

        echo 'Delete True';
    }else{
        echo 'Delete false';
    }

}
else{
    $query4 = "SELECT * FROM employee";
     
    if(mysqli_query($conn,$query4)){

        echo 'Select True';
    }else{
        echo 'Select false';
    }


}





?>