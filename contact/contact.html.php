<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="contact/index.php">
            <label for="c_name">*Name:</label><br>
            <input type="text" name="c_name" id="c_name" required><br>
            <label for="c_email">*Email:</label><br>
            <input type="text" name="c_email" id="c_email" required><br>
            <label for="comment">Comments:</label><br>
            <textarea rows="4" cols="50" type="text" name="comment" id="comment">
            </textarea><br>
            <input type="submit">
        </form>
</html>