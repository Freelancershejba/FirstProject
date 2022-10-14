<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class and Object create php</title>
</head>

<body>

    <?php
    class man
    {
        public $distric;
        public $name;
        public $username;
        public $age;

        function districs($distric_name)
        {
            $this->distric = $distric_name;
            return $this->distric;
        }
    }

    $man = new man();
    if (isset($_REQUEST['submit'])) {

        $man->distric = $_REQUEST['distric'];
        $man->name = $_REQUEST['name'];
        $man->username = $_REQUEST['username'];
        $man->age = $_REQUEST['age'];

        echo $man->distric;
        echo '</br>';
        echo '</br>';
        echo $man->name;
        echo '</br>';
        echo '</br>';
        echo $man->username;
        echo '</br>';
        echo '</br>';
        echo $man->age;
        echo '</br>';
        echo '</br>';

        $man->distric = '';
        $man->name = '';
        $man->username = '';
        $man->age = '';
    }



    ?>

    <form action="" method="POST">
        <input type="text" name="distric" value="<?php echo $man->distric; ?>"
            placeholder="Enter your distric name.."><br><br>
        <input type="text" name="name" value="<?php echo $man->name; ?>" placeholder="Enter your name.."><br><br>
        <input type="text" name="username" value="<?php echo $man->username; ?>"
            placeholder="Enter your username.."><br><br>
        <input type="number" name="age" value="<?php echo $man->age; ?>" placeholder="Enter your age.."><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>