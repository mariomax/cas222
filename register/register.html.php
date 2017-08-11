<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ace in the Hole Registration</title>
        <link rel="stylesheet" href="styles.css">
    </head>
        <form method="post" action="register/index.php">
            <label for="event">Saturday Events:</label><br>
            <input type="radio" name="event" id="event" value="long_course"> Long Course<br>
            <input type="radio" name="event" id="event" value="olympic"> Olympic<br>
            <input type="radio" name="event" id="event" value="sprint"> Sprint<br>
            <input type="radio" name="event" id="event" value="try_a_tri"> Try-a-Tri<br>
            <input type="radio" name="event" id="event" value="none"> None<br>
            
            <label for="sunevent">Sunday Events:</label><br>
            <input type="radio" name="sunevent" id="sunevent" value="half_marathon"> Half Marathon<br>
            <input type="radio" name="sunevent" id="sunevent" value="10k"> 10K<br>
            <input type="radio" name="sunevent" id="sunevent" value="splash-n-dash"> Splash n Dash<br>
            <input type="radio" name="sunevent" id="sunevent" value="none"> None<br>
            
            <label for="name">*Name:</label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="email">*Email:</label><br>
            <input type="text" name="email" id="email" required><br>
            <input type="submit">
        </form>
</html>