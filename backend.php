<?php

session_start();

// variables : an element, feature, or factor that is liable to vary or change.

// array : a collection of similar data elements stored at contiguous memory locations

// $_POST, $_GET, $_SESSION, ... (in other session)  : glabal valiable

// print_r($_POST);

include('conn.php');

$names = $_POST['names'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$password = $_POST['password'];

// die($dob);


// create database and tables
// CREATE TABLE `crud_operation`.`student` ( `id` INT NOT NULL AUTO_INCREMENT ,  `names` VARCHAR(100) NOT NULL ,  `email` VARCHAR(100) NOT NULL ,  `dob` DATE NOT NULL ,  `password` VARCHAR(255) NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
// ALTER TABLE `student`  ADD `gender` VARCHAR(10) NOT NULL  AFTER `email`;


// Auth : is verfy that a user is whom he /she say he/  is; 

// =============Create==============
if(isset($_POST['add'])){

$sql = "INSERT INTO student(names,email,gender,password,dob)
VALUES('$names', '$email', '$gender', '$password', '$dob')";

$query = $conn->query($sql);

if($query){
    $_SESSION["success-message"] = "Data inserted";
    header('location:add-student.php');

}
else{
    $_SESSION["fail-message"] =  "Data failed to insert :" . $conn->error ;
    header('location:add-student.php');
}

}

// =========Update==============
if(isset($_POST['update']) && isset($_POST['id'])){

    $id = $_POST['id'];
    $sql = "UPDATE student SET names ='$names' ,email = '$email' ,gender='$gender',dob='$dob' WHERE id=$id";

    $query = $conn->query($sql);

    if($query){
        $_SESSION["success-message"] = " Data updated ";
        header('location:index.php');
    
    }
    else{
        $_SESSION["fail-message"] =  "Data failed to update :" . $conn->error ;
        header('location:index.php');
    }
}

// ===============Delete===============

if(isset($_GET['delete_id']) && $_GET['delete_id'] != ""){

    $id = $_GET['delete_id'];

    $sql = "DELETE FROM student WHERE id=$id";

    $query = $conn->query($sql);

    if($query){
        $_SESSION["success-message"] = " Data Deleted successfly ";
        header('location:index.php');
    
    }
    else{
        $_SESSION["fail-message"] =  "Data failed to delete :" . $conn->error ;
        header('location:index.php');
    }


}


// Authenication

if(isset($_POST['register'])){
    // save to database
    // create session for this user
    // re direct to authenticated page (dashboard)
}

?>