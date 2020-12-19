<?php
include_once 'config.php';
if(isset($_POST['save']))
{
	 $first_name = $_POST['fname'];
	 $surname = $_POST['sname'];
     $email = $_POST['email'];
     $password=$_POST['password'];
     $date=$_POST['date'];
     $gender=$_POST['gender'];
     $country=$_POST['country'];
     $city=$_POST['city'];
     $university_name=$_POST['university_name'];
     $academic_streaming=$_POST['academic_streaming'];
     $image=$_POST['image'];
if ($image==""){
$res =  mysqli_query($connection,"INSERT INTO students(first_name,surname,email,passwords,date_of_birth,gender,country,city,university_name,academic_streaming	) 
     VALUES ('$first_name','$surname','$email','$password','$date','$gender','$country','$city','$university_name','$academic_streaming')");}else {

$res =  mysqli_query($connection,"INSERT INTO students(first_name,surname,email,passwords,date_of_birth,gender,country,city,university_name,academic_streaming,images	) 
VALUES ('$first_name','$surname','$email','$password','$date','$gender','$country','$city','$university_name','$academic_streaming','$image')");
     }
header('location: index_signup.html'); 
    if($res){
         echo "ok";
     }else{
         echo "no";
     }
}
?>
