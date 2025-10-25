<?php

    include("config.php");
    echo "<br>" ;
    echo "hihihiihihiih";
    if(isset($_POST['submit'])){
        $name = $_post['Full Name'];
        $email = $_post['Email'];
        $Username = $_post['Username'];
        $Password = $_post['Password'];
        $NicNumber = $_post['Nic Number'];
        $MobileNumber = $_post['Mobile Number'];

        $result = mysqli_query($mysqli,"insert into users value('','$name','$email','$username','$password','$NicNumber','$MobileNumber')");

        echo "hihihiihihiih";
        if($result){
            echo "user register sucess,you can login now";
        }
        else{
        echo "register failed,somthing went to wrong!!!";
        }
    }
?>