<?php 
    if (isset($_POST['email'])){
        $email = $_POST['email'];

        $conx = mysqli_connect("localhost", "root", "", "test");

        $sql = "INSERT INTO `info`(`email`) VALUES ('$email')";

        $result = mysqli_query($conx, $sql);

        if ($result == true){
            echo "<h3>Inserted !!!</h3>";
        }
    }
?>