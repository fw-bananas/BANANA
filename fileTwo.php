<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/11/19
 * Time: 10:25 AM
 */
if (isset($_GET['x'])){

    $jina = $_GET['x'];
    $nambari = $_GET['y'];
    $salo = $_GET['z'];
    $conn = mysqli_connect("localhost","root","","employeez");
    if (!$conn){
        echo "Database not found";
    }else {
        $insert = mysqli_query($conn, "INSERT INTO `details`(`ID`, `name`, `phone`, `salary`) VALUES (null,'$jina','$nambari','$salo')");
        if(!$insert){
            echo "Employee not saved";
        }else{
            echo "Employee saved successfully";

            header("location:fileOne.php");
        }
    }

}


?>