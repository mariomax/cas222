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
            <p>Name: <?php echo htmlspecialchars($c_name, ENT_QUOTES, 'UTF-8'); ?><br>
                Email: <?php echo htmlspecialchars($c_email, ENT_QUOTES, 'UTF-8'); ?><br>
                Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?><br>
                
            </p>
        </main>  
        
    </body>
</html>