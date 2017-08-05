<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace Registration</title>
    </head>
    <body>

        <main>
            <h2>Success!</h2>
            <p>You successfully submitted your info to the database.</p>
            <p>Event: <?php echo htmlspecialchars($event, ENT_QUOTES, 'UTF-8'); ?><br>
                Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                
            </p>
        </main>  
        
    </body>
</html>