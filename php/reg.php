<?php
$conn = new mysqli('localhost', 'root', 'root', 'sportstore');
    mysqli_set_charset($link, 'utf8');
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $name = $_POST[login];
    $email = $_POST[email];
    $password = $_POST[password];
    $sql = "INSERT INTO users(ID, NAME, EMAIL, PASSWORD) VALUES (NULL, '$name', '$email', '$password')";
    $conn->query($sql);
    session_start();
    $_SESSION['user'] = array('ID' => NULL, 'NAME' => $name, 'EMAIL' => $email, 'PASSWORD' => $password);
    $conn->close();
?>
