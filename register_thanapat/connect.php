<?php
$firstname = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['pessword'];
$number = $_POST['number'];

//DaTabase connection
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    echo "$connect_erro";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registrtion(firstName, lastName, gender, email, password, number)(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firsName, $lastName, $gender, $email, $password, $number);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration-successfully...";
    $stmt->close();
    $stmt->close();
}
?>