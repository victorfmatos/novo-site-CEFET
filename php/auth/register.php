<?php

  include_once("../db/connection.php");

  

  if ($_POST["username"] &&
      $_POST["email"] &&
      $_POST["password"] &&
      $_POST["confirmPassword"]) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);
  }

?>