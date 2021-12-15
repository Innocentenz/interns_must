<?php
require_once('../initialize.php');

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
        $errors = array();
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (empty($firstname) && empty($lastname) && empty($email) && empty($password)) {
          $errors = "please fill out all the data";
          echo json_encode($errors);
          exit;
        }

      $query = mysqli_query($conn,"INSERT INTO users(lastname, firstname, email, password) VALUES('$lastname','$firstname','$email','$password')");

        if ($query) {
          echo json_encode($firstname);
          echo json_encode($lastname);
          echo json_encode($email);
          echo json_encode($password);
          echo json_encode('thanks for registering');
            exit;
        }









}
