<?php

$con = mysqli_connect("localhost", "root", "", "RIPHAT");
if(!$con){
die('Connection Failed'. mysqli_connect_error());
}

// update student
if ($_POST['action'] == 'update'){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $sql = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id = $id";
  $con->query($sql);

  // $sqlResult = "SELECT name, email, phone, course, WHERE id =$id";
  // $result = $con->query($sqlResult);
  // if($result->num_rows > 0){
  //   $student = $result->fetch_assoc();

  //   $old_name = $student['name'];
  //   $old_email = $student['email'];
  // }
}
?>