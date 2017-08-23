<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole Contact</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="contact/index.php">
            <label for="participation">I would like to attend as a:</label><br>
            <input type="radio" name="participation" id="participation" value="athlete"> Participant<br>
            <input type="radio" name="participation" id="participation" value="volunteer"> Volunteer<br>
            <label for="c_name">*Name:</label><br>
            <input type="text" name="c_name" id="c_name" required><br>
            <label for="c_email">*Email:</label><br>
            <input type="text" name="c_email" id="c_email" required><br>
            <label for="c_phone">*Phone #:</label><br>
            <input type="text" name="c_phone" id="c_phone" required><br>
            <label for="comment">Comments:</label><br>
            <textarea rows="4" cols="50" type="text" name="comment" id="comment">
            </textarea><br>
            <input type="submit" value="Submit">
        </form>
</html>