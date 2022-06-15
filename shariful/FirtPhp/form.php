<?php
if (isset($_POST['submit'])) {
  $host = 'localhost';
  $userName = 'root';
  $password = '';
  $databaseName = 'user_profile';

  $cn = mysqli_connect($host, $userName, $password, $databaseName);

  $sql = "insert into user_info(first_name, last_name, username, email_or_phone, password) values('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['username'] . "','" . $_POST['email_or_phone'] . "','" . $_POST['password'] . "')";

  if (mysqli_query($cn, $sql)) {
    if ('insert into user_info') {
      print("<h1 class='title_view'>Data Save</h1>");
    }
  } else {
    mysqli_errno($cn);
  }
}

?>


<form style="width: 100%; height:400px;" action="" method="POST">
  <label for="fname">First Name:</label><br> <br>
  <input style="width: 50%; padding:10px 10px;" type=" text" id="fname" name="fname" placeholder="First Name" required><br> <br>
  <label for="lname">Last Name:</label><br> <br>
  <input style="width: 50%; padding:10px 10px;" type="text" id="lname" name="lname" placeholder="Last Name" required><br> <br>
  <label for="username">User Name:</label><br> <br>
  <input style="width: 50%; padding:10px 10px;" type="text" id="username" name="username" placeholder="User Name" required><br> <br>
  <label for="email_or_phone">Email Or Phone:</label><br> <br>
  <input style="width: 50%; padding:10px 10px;" type="text" id="email_or_phone" name="email_or_phone" placeholder="Email Or Phone" required><br> <br>
  <label for="password">Password:</label><br> <br>
  <input style="width: 50%; padding:10px 10px;" type="password" id="password" name="password" placeholder="Password" required><br><br>
  <input style="width: 25%; padding:10px 10px; text-align:center;" type="submit" name="submit" value="Submit">
</form>