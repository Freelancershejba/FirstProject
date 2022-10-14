<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <?php
    $name = $email = $phone = "";
    $Ename = $Eemail = $Ephone = "";



    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $e = 0;
        if (empty($name)) {
            $e++;
            $Ename = "Please enter your name!";
        }
        if (empty($email)) {
            $e++;
            $Eemail = "Please enter your email!";
        }
        if (empty($phone)) {
            $e++;
            $Ephone = "Please enter your phone!";
        }
        if ($e == 0) {
            echo 'Data inserted!';
            echo '</br>';
            echo $name;
            echo '</br>';
            echo $email;
            echo '</br>';
            echo $phone;
            echo '</br>';
            echo '</br>';
            $name = $email = $phone = "";
        }
    }





    ?>




    <form method="POST" action="">
        <input type="text" name="name" value="<?php echo $name ?>" placeholder="Enter your Name"><br>
        <span class="err"><?php echo $Ename ?></span><br><br>
        <input type="email" name="email" value="<?php echo $email ?>" placeholder="Enter your Email"><br>
        <span class="err"><?php echo $Eemail ?></span><br><br>
        <input type="number" name="phone" value="<?php echo $phone ?>" placeholder="Enter your Phone Number"><br>
        <span class="err"><?php echo $Ephone ?></span><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>





</body>

</html>