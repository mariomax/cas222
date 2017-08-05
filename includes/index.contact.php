<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
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
            name = :name,
            email = :email,
            comment = :comment';
        
        // Field names need to match those from the database.
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':comment', $comment);
        // The $_POST['myName'] values need to match the "name" of the form field in the register.html.php file.
        // See other notes about this in the contact\index.php file.

        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted author.';
        include 'error.html.php';
        exit();
    }
        include 'success.html.php';
} else {
        include 'contact.html.php';
}
