<form style="width: 100%; height:400px;" action="" method="POST">
    <label for="fname">Type color name</label><br> <br>
    <input style="width: 50%; padding:10px 10px;" type=" text" id="fname" name="fname" placeholder="Color name"
        required>
    <input style="width: 25%; padding:10px 10px; text-align:center;" type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST["submit"])) {
    $favcolor = $_POST["fname"];


    switch ($favcolor) {
        case "red":
            echo "<h1 style='color:" . $favcolor . ";'>Your favorite color is red!</h1>";
            break;
        case "blue":
            echo "<h1 style='color:" . $favcolor . ";'>Your favorite color is blue!</h1>";
            break;
        case "green":
            echo "<h1 style='color:" . $favcolor . ";'>Your favorite color is green!</h1>";
            break;
        case "black":
            echo "<h1 style='color:" . $favcolor . ";'>Your favorite color is black!</h1>";
            break;
        default:
            echo "<h1 style='color:" . $favcolor . ";'>Your favorite color is not found!</h1>";
    }
}