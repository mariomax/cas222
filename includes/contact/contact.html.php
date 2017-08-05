<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="index.php">
            <label for="c_name">*Name:</label>
            <input type="text" name="c_name" id="c_name" required><br>
            <label for="c_email">*Email:</label>
            <input type="text" name="c_email" id="c_email" required><br>
            <label for="comment">Additional comments:</label>
            <textarea rows="4" cols="50" type="text" name="comment" id="comment">
            </textarea>
            <input type="submit">
        </form>
</html>