<?php

if ( strtolower($_SERVER['REQUEST_METHOD']) == 'post' ) {
    if (!isset($_SESSION["user"])) {
        session_start();
        $email = $_POST['inputEmail1'] ;
        $userPassword = $_POST['inputPassword4'];
        require('db_connection.php');
        $stmt = $conn->prepare('INSERT INTO users (email,password)VALUES( :email , :password ) ');
        try {
            $stmt->execute([ ':email' => $email , ':password' => $userPassword  ]);
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
            echo"  plz" ;

            header('Location: login.php');
        }
        // set the resulting array to associative
        $_SESSION["user"]="here";

        header('Location: index.php');

        $conn = null;
    }}
var_dump($_SESSION["user"]);

//header('Location: form.php');