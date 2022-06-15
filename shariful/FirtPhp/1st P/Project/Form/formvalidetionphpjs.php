<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <title>Form Validation by PHP and Js</title>
</head>

<body>
    <div class="form_section">
        <div class="container">
            <div class="row">

                <?php

                $studentName = "";
                $userName = "";
                $fatherName = "";
                $motherName = "";
                $email = "";
                $number = "";
                $date = "";
                $inlineRadioOptions = "";
                $password = "";
                $checkbox = "";

                $eStudentName = "";
                $eUserName = "";
                $eFatherName = "";
                $eMotherName = "";
                $eEmail = "";
                $eNumber = "";
                $eDate = "";
                $eInlineRadioOptions = "";
                $ePassword = "";
                $eCheckbox = "";

                if (isset($_POST['submit'])) {
                    $studentName = $_POST['studentName'];
                    $userName = $_POST['userName'];
                    $fatherName = $_POST['fatherName'];
                    $motherName = $_POST['motherName'];
                    $email = $_POST['email'];
                    $number = $_POST['number'];
                    $date = $_POST['date'];

                    if (isset($_POST['inlineRadioOptions'])) {
                        $inlineRadioOptions = $_POST['inlineRadioOptions'];
                    }

                    $password = $_POST['password'];

                    if (isset($_POST['checkbox'])) {
                        $checkbox = $_POST['checkbox'];
                    }



                    $error = 0;
                    if (
                        $studentName == ""
                    ) {
                        $error++;
                        $eStudentName = '<span class="Red_alert">Please enter your name!</span>';
                    }
                    if ($userName == "") {
                        $error++;
                        $eUserName = '<span class="Red_alert">Please enter your username!</span>';
                    }
                    if ($fatherName == "") {
                        $error++;
                        $eFatherName = '<span class="Red_alert">Please enter your father name!</span>';
                    }
                    if ($motherName == "") {
                        $error++;
                        $eMotherName = '<span class="Red_alert">Please enter your mother name!</span>';
                    }
                    if ($email == "") {
                        $error++;
                        $eEmail = '<span class="Red_alert">Please enter your email!</span>';
                    }
                    if ($number == "") {
                        $error++;
                        $eNumber = '<span class="Red_alert">Please enter your phone number!</span>';
                    }
                    if ($date == "") {
                        $error++;
                        $eDate = '<span class="Red_alert">Please select your birthday!</span>';
                    }
                    if (
                        $inlineRadioOptions == ""
                    ) {
                        $error++;
                        $eInlineRadioOptions = '<span class="Red_alert">Please select your gender!</span>';
                    }
                    if ($password == "") {
                        $error++;
                        $ePassword = '<span class="Red_alert">Please enter password!</span>';
                    }
                    if ($checkbox == "") {
                        $error++;
                        $eCheckbox = '<span class="Red_alert">Please check the box!</span>';
                    }
                    if ($error == 0) {


                        $host = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'student_info';

                        $cn = mysqli_connect($host, $username, $password, $dbname);


                        // $studentName = $_POST['studentName'];
                        // $userName = $_POST['userName'];
                        // $fatherName = $_POST['fatherName'];
                        // $motherName = $_POST['motherName'];
                        // $email = $_POST['email'];
                        // $number = $_POST['number'];
                        // $date = $_POST['date'];
                        // $inlineRadioOptions = $_POST['inlineRadioOptions'];
                        // $password = $_POST['password'];
                        // $checkbox = $_POST['checkbox'];
                        $success = '<span class="Green_alert">Data Insert Successfully!</span>';






                        $sql = "insert into student_2(student_name, username, father_name, mother_name, email, phone_number, bithday, gender, password) values('" . $_POST['studentName'] . "','" . $_POST['userName'] . "','" . $_POST['fatherName'] . "','" . $_POST['motherName'] . "','" . $_POST['email'] . "','" . $_POST['number'] . "','" . $_POST['date'] . "','" . $_POST['inlineRadioOptions'] . "','" . $_POST['password'] . "')";

                        // print_r($sql);
                        // exit;

                        if (mysqli_query($cn, $sql)) {
                            echo $success;
                            $studentName = "";
                            $userName = "";
                            $fatherName = "";
                            $motherName = "";
                            $email = "";
                            $number = "";
                            $date = "";
                            $inlineRadioOptions = "";
                            $password = "";
                            $checkbox = "";
                        }
                    }
                }

                ?>




                <form class="form_stytle my-4 p-5" method="POST" action="" onSubmit="return vld()">
                    <div class="form_header text-center">
                        <h1>Addmission Form</h1>
                        <h3>Pitech It Training Center</h3>
                        <h3>Besicnogori,Thakurgaon Sodor,Thakurgaon</h3>
                    </div>

                    <div class="mb-3 float-end" style="width:49%;">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="name" name="studentName" class="form-control" value="<?php echo $studentName; ?>"
                            placeholder="Enter your name" id="studentName" aria-describedby="emailHelp">
                        <span class="Red_alert" id="eStudentName"><?php echo $eStudentName; ?></span>

                    </div>

                    <div class="mb-3 float-start" style="width:49%;">
                        <label for="userName" class="form-label">Username</label>
                        <input type="name" name="userName" class="form-control" value="<?php echo $userName; ?>"
                            placeholder="Enter your username" id="userName">
                        <span class="Red_alert" id="eUserName"><?php echo $eUserName; ?></span>
                    </div>

                    <div class="mb-3 float-end" style="width:49%;">
                        <label for="fatherName" class="form-label">Father Name</label>
                        <input type="name" name="fatherName" class="form-control" value="<?php echo $fatherName; ?>"
                            placeholder="Enter your father name" id="fatherName">
                        <span class="Red_alert" id="eFatherName"><?php echo $eFatherName; ?></span>
                    </div>

                    <div class="mb-3 float-start" style="width:49%;">
                        <label for="motherName" class="form-label">Mother Name</label>
                        <input type="name" name="motherName" class="form-control" value="<?php echo $motherName; ?>"
                            placeholder="Enter your mother name" id="motherName">
                        <span class="Red_alert" id="eMotherName"><?php echo $eMotherName; ?></span>
                    </div>

                    <div class="mb-3 float-end" style="width:49%;">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>"
                            placeholder="Enter your email">
                        <span class="Red_alert" id="eEmail"><?php echo $eEmail; ?></span>
                    </div>

                    <div class="mb-3 float-start" style="width:49%;">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="number" name="number" id="phoneNumber" class="form-control"
                            value="<?php echo $number; ?>" placeholder="Enter your number">
                        <span class="Red_alert" id="eNumber"><?php echo $eNumber; ?></span>
                    </div>

                    <div class="mb-3" style="width:100%; display:flex;">
                        <div class="mb-3" style="width:49%; margin-right:2%;">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input style="color:#696969;" type="date" name="date" id="birthday" class="form-control"
                                value="<?php echo $date; ?>">
                            <span class="Red_alert" id="eDate"><?php echo $eDate; ?></span>
                        </div>

                        <div class="mb-3 " style="width:49%;">
                            <label for="birthday" class="form-label d-block">Select your gender</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                    value="male">
                                <label class="form-check-label sm2" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                    value="female">
                                <label class="form-check-label sm2" for="inlineRadio2">Female</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                    value="custom">
                                <label class="form-check-label sm2" for="inlineRadio3">Custom</label>
                            </div></br>
                            <span class="Red_alert" id="eInlineRadioOptions"><?php echo $eInlineRadioOptions; ?></span>

                        </div>
                    </div>

                    <div class="mb-3 float-end" style="width:49%;">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            value="<?php echo $password; ?>">
                        <span class="Red_alert" id="ePassword"><?php echo $ePassword; ?></span>
                    </div>

                    <div class="mb-3 float-start" style="width:49%;">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" name="password" id="confirmPassword" class="form-control"
                            value="<?php echo $password; ?>">
                        <span class="Red_alert" id="eConfirmPassword"><?php echo $ePassword; ?></span>
                    </div>

                    <div class="mb-3 form-check">
                        <label class="form-check-label sm" for="exampleCheck1">Agree</label>
                        <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1"></br>
                        <span class="Red_alert" id="eCheckbox"><?php echo $eCheckbox; ?></span>
                    </div>

                    <!-- <button type="submit" onClick="vld()" class="btn btn-primary" name="submit">Submit</button> -->
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>



    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <script type="text/javascript">
    // alert('ok');

    // function vld(){
    //     alert('ok');
    // }

    function vld() {
        var error = 0;

        if (document.getElementById("studentName").value == '') {

            error++;
            document.getElementById("eStudentName").innerText = 'Requared';


        }
        if (document.getElementById("userName").value == '') {

            error++;
            document.getElementById("eUserName").innerText = 'Requared';


        }
        if (document.getElementById("fatherName").value == '') {

            error++;
            document.getElementById("eFatherName").innerText = 'Requared';


        }
        if (document.getElementById("motherName").value == '') {

            error++;
            document.getElementById("eMotherName").innerText = 'Requared';


        }
        if (document.getElementById("email").value == '') {

            error++;
            document.getElementById("eEmail").innerText = 'Requared';


        }
        if (document.getElementById("phoneNumber").value == '') {

            error++;
            document.getElementById("eNumber").innerText = 'Requared';


        }
        if (document.getElementById("birthday").value == '') {

            error++;
            document.getElementById("eDate").innerText = 'Requared';


        }
        if (document.getElementById("inlineRadio1").value == null) {

            error++;
            document.getElementById("eInlineRadioOptions").innerText = 'Requared';

        }
        if (document.getElementById("password").value == '') {

            error++;
            document.getElementById("ePassword").innerText = 'Requared';


        }

        if (document.getElementById("confirmPassword").value == '') {

            error++;
            document.getElementById("eConfirmPassword").innerText = 'Requared';


        }
        if (document.getElementById('exampleCheck1').checked == false) {
            error++;
            document.getElementById("eCheckbox").innerText = 'Requared';
        }

        if (error == 0) {
            return true;
        } else {
            return false;
        }
    }
    </script>


</body>

</html>