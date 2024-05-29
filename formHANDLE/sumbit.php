<?php

$conn = new mysqli('localhost', 'root', '', 'student');

if (!empty($conn->connect_error)) {
    echo '<h1>connection failed</h1>';
}
echo '<pre>';
print_r($_POST); 
print_r($_FILES);
echo '<pre>';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$age = $_POST['age'];


$target = 'uplode/';
$randum = rand(10,100);
$path  = $target.$randum.$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],$path);

print_r($_POST['name']);

$sql = "INSERT INTO uusers, (name, email, phone, age, image)  VALUES ('$name','$email','$phone','$age','$path)";

// echo  $conn->query($sql);




