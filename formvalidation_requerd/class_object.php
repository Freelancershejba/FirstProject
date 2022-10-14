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
    class student_info
    {
        public $institute;
        public $name;
        public $email;
        public $phone;
        function institutes($institute_name)
        {
            $this->institute = $institute_name;
            return $this->institute;
        }
    }
    $student = new student_info();
    if (isset($_POST['submit'])) {
        $student->institute = $_POST['institute'];
        $student->name = $_POST['name'];
        $student->email = $_POST['email'];
        $student->phone = $_POST['phone'];

        echo  $student->institute;
        echo "</br>";
        echo $student->name;
        echo "</br>";
        echo $student->email;
        echo "</br>";
        echo $student->phone;
        echo "</br>";
        echo "</br>";

        $student->institute = '';
        $student->name = '';
        $student->email = '';
        $student->phone = '';
    }


    ?>

    <div class="div" style="width:100%;">
        <form method="POST" action="" style="width:50%;">
            <input style="width:100%;" type="text" name="institute" value="<?php echo $student->institute; ?>"
                placeholder="Enter your Institute Name"><br><br>
            <input style="width:100%;" type="text" name="name" value="<?php echo $student->name; ?>"
                placeholder="Enter your Name"><br><br>
            <input style="width:100%;" type="email" name="email" value="<?php echo $student->email ?>"
                placeholder="Enter your Email"><br><br>
            <input style="width:100%;" type="number" name="phone" value="<?php echo $student->phone; ?>"
                placeholder="Enter your Phone Number"><br><br>
            <input style="width:100%;" type="submit" name="submit" value="Submit">

        </form>
    </div>

</body>

</html>