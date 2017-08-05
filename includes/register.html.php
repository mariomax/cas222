<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="index.php">
            <label for="event">Event:</label>
            
<!--            <input type="text" name="event" id="event" required><br>  -->
            
            <input type="radio" name="event" id="event" value="long_course"> Long Course<br>
            <input type="radio" name="event" id="event" value="olympic"> Olympic<br>
            <input type="radio" name="event" id="event" value="sprint"> Sprint<br>
            <input type="radio" name="event" id="event" value="try_a_tri"> Try-a-Tri<br>
            <input type="radio" name="event" id="event" value="half_marathon"> Half Marathon<br>
            <input type="radio" name="event" id="event" value="10k"> 10K<br>
            <label for="name">*Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="email">*Email:</label>
            <input type="text" name="email" id="email" required>
            <input type="submit">
        </form>
</html>