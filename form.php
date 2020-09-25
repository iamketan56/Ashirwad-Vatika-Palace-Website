<?php
 if(isset($_POST['submit']))
 {
     $firstname = $_POST['fname'];
     $lastname = $_POST['lname'];
     $function = $_POST['function'];
     $marriage = $_POST['marriage'];
     $message = $_POST['message'];

     echo $firstname;
    echo "<br>";
     echo $lastname;
     echo $function;
     echo $message;
 }  
?>