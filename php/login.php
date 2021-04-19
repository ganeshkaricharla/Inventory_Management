<?php
$username = filter_input(INPUT_POST, 'Email');
$password = filter_input(INPUT_POST, 'Password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "1234";
$dbname = "login_db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql =  "INSERT INTO login_db(Email,Password)
values ('$username','$password')";
if ($conn->query($sql)){
echo query($sql);
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
