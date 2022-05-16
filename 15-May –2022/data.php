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
    $result = mysqli_query($conn, $query4);


    if($result){

        $arr = $result->fetch_all();

        echo "<table border='1'>
        '<tr>'
           <th>id</th>
           <th>Fname</th>
           <th>Lname</th>
           <th>phone</th>
           <th>salary</th>
           <th>department</th> 
        </tr>";
        

        foreach($arr as $key){

            echo '<tr>';
            foreach($key as $value){
                echo '<td>'.$value.'</td>';
            }
            echo '</tr>';
        }

        echo '/table';



    }
    else{
        echo "Error: " . $query4. "<br>" .$conn->error;;
    }




    


}





?>