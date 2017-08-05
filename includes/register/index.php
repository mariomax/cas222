<?php

if (isset($_POST['name'])) {
    $event = $_POST['event'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
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
        $sql = 'INSERT INTO register SET
            event = :event,
            name = :name,
            email = :email';
        
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':event', $event);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        // The $_POST['myName'] values need to match the "name" of the form field in the register.html.php file.

        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'There was an error with your registration.';
        include 'error.html.php';
        exit();
    }
        include 'success.html.php';
} else {
        include 'register.html.php';
}
