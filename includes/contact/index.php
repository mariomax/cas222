<?php

if (isset($_POST['c_name'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $comment = $_POST['comment'];
    
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=worldwi3_ace_reg_db', 'worldwi3_ace_register', 'AceInTheHole1');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Unable to connect to the database server.';
        echo $e->getMessage();
        include 'error.html.php';
        exit();
    }

    try
    {
        $sql = 'INSERT INTO contact SET
            c_name = :c_name,
            c_email = :c_email,
            comment = :comment';
        
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':c_name', $c_name);
        $s->bindValue(':c_email', $c_email);
        $s->bindValue(':comment', $comment);
        // The $_POST['myName'] values need to match the "name" of the form field in the contact.html.php file.

        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'There was an error submitting your information.';
        include 'error.html.php';
        exit();
    }
        include ('success.html.php');
} else {
        include ('contact.html.php');
}
