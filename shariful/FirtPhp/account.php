<?php
if (isset($_POST['login'])) {
    $host = 'localhost';
    $userName = 'root';
    $password = '';
    $databaseName = 'user_profile';

    $cn = mysqli_connect($host, $userName, $password, $databaseName);

    $sql = "insert into login_info(email_or_phone, password) values('" . $_POST['email_or_phone'] . "','" . $_POST['password'] . "')";

    if (mysqli_query($cn, $sql)) {
        print("<h1 class='title_view'>Login</h1>");
    } else {
        mysqli_errno($cn);
    }
}

?>

<form style="width: 100%; height:400px;" action="" method="POST">
    <label for="email_or_phone">Email Or Phone:</label><br> <br>
    <input style="width: 50%; padding:10px 10px;" type="text" id="email_or_phone" name="email_or_phone"
        placeholder="Email Or Phone" required><br> <br>
    <label for="password">Password:</label><br> <br>
    <input style="width: 50%; padding:10px 10px;" type="password" id="password" name="password" placeholder="Password"
        required><br><br>
    <input style="width: 25%; padding:10px 10px; text-align:center;" type="submit" name="login" value="Login">
</form>