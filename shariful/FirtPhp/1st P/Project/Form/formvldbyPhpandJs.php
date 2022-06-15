<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Form Validation By PHP & Js</title>
</head>

<style>
.form_area {
    box-shadow: 0 0 5px 5px #ddd;
}

.form_header {
    border-bottom: 3px solid #ddd;
}

.form_header h1 {
    color: tomato;
}

.form_header h3 {
    color: #fb8874;
}

.sm {
    color: tomato;
    font-weight: bold;
}

.R_alert {
    color: red;
    background-color: #ddd;
    font-weight: bold;
}

.G_alert {
    color: green;
    background-color: #ddd;
    padding: 5px 8px;
    font-weight: bold;
}

.form_area p {
    text-align: right;
    color: #ddd;
    font-weight: bold;
}
</style>

<body>
    <div class="container">
        <div class="row">

            <div class="form_area my-3 px-5 py-4 ">

                <p>Design & Developed by Md. Shariful Islam</p>

                <form method="POST" action="" onSubmit="return vld()">
                    <div class="form_header py-3 mb-4 text-center">
                        <h1>Student Form</h1>
                        <h3>Pithech IT Training Center</h3>
                        <h3>Besic Nagori, Thakurgaon Sadar, Thakurgaon.</h3>
                    </div>


                    <?php
                    $studentName = "";
                    $fatherName = "";
                    $motherName = "";
                    $roll = "";
                    $registration = "";
                    $phoneNumber = "";
                    $distric = "0";


                    $EstudentName = "";
                    $EfatherName = "";
                    $EmotherName = "";
                    $Eroll = "";
                    $Eregistration = "";
                    $EphoneNumber = "";
                    $Edistric = "";

                    if (isset($_POST["submit"])) {
                        $studentName = $_POST["studentName"];
                        $fatherName = $_POST["fatherName"];
                        $motherName = $_POST["motherName"];
                        $roll = $_POST["roll"];
                        $registration = $_POST["registration"];
                        $phoneNumber = $_POST["phoneNumber"];
                        $distric = $_POST["distric"];

                        $er = 0;
                        if ($studentName == "") {
                            $er++;
                            $EstudentName = '<span class="R_alert">X Please enter your name PHP!</span>';
                        }
                        if ($fatherName == "") {
                            $er++;
                            $EfatherName = '<span class="R_alert">X Please enter your father name PHP!</span>';
                        }
                        if ($motherName == "") {
                            $er++;
                            $EmotherName = '<span class="R_alert">X Please enter your mother name PHP!</span>';
                        }
                        if ($roll == "") {
                            $er++;
                            $Eroll = '<span class="R_alert">X Please enter your roll number PHP!</span>';
                        }
                        if ($registration == "") {
                            $er++;
                            $Eregistration = '<span class="R_alert">X Please enter your registration number PHP!</span>';
                        }
                        if ($phoneNumber == "") {
                            $er++;
                            $EphoneNumber = '<span class="R_alert">X Please enter your phone number PHP!</span>';
                        }
                        if ($distric == "0") {
                            $er++;
                            $Edistric = '<span class="R_alert">X Please select your distric PHP!</span>';
                        }
                        if ($er == 0) {
                            $host = 'localhost';
                            $userName = 'root';
                            $password = '';
                            $databaseName = 'student_info';
                            $success = '<span class="G_alert">Data insert successfully PHP!</span>';

                            $cn = mysqli_connect($host, $userName, $password, $databaseName);

                            $sql = "insert into student(student_name, father_name, mother_name, roll, registration, phone_number, distric) values('" . $_POST['studentName'] . "','" . $_POST['fatherName'] . "','" . $_POST['motherName'] . "','" . $_POST['roll'] . "','" . $_POST['registration'] . "','" . $_POST['phoneNumber'] . "','" . $_POST['distric'] . "')";

                            if (mysqli_query($cn, $sql)) {
                                echo $success;
                                $studentName = "";
                                $fatherName = "";
                                $motherName = "";
                                $roll = "";
                                $registration = "";
                                $phoneNumber = "";
                                $distric = "0";
                            }
                        }
                    }










                    ?>





                    <div class="mb-3">
                        <label for="studentName" class="form-lebel sm">Student Name</label>
                        <input type="name" name="studentName" class="form-control" placeholder="Enter your name"
                            value="<?php echo $studentName; ?>" value="<?php echo $studentName; ?>" id="studentName"
                            aria-describedby="emailHelp">
                        <span id="EstudentName"><?php echo $EstudentName; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="fatherName" class="form-lebel sm">Father Name</lebel>
                        <input type="name" name="fatherName" class="form-control" placeholder="Enter your father name"
                            value="<?php echo $fatherName; ?>" id="fatherName" aria-describedby="emailHelp">
                        <span id="EfatherName"><?php echo $EfatherName; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="motherName" class="form-lebel sm">Mother Name</lebel>
                        <input type="name" name="motherName" class="form-control" placeholder="Enter your mother name"
                            value="<?php echo $motherName; ?>" id="motherName" aria-describedby="emailHelp">
                        <span id="EmotherName"><?php echo $EmotherName; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="roll" class="form-lebel sm">Roll No</lebel>
                        <input type="number" name="roll" class="form-control" placeholder="Enter your roll number"
                            value="<?php echo $roll; ?>" id="roll" aria-describedby="emailHelp">
                        <span id="Eroll"><?php echo $Eroll; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="registration" class="form-lebel sm">Registration No</lebel>
                        <input type="number" name="registration" class="form-control"
                            placeholder="Enter your registration number" value="<?php echo $registration; ?>"
                            id="registration" aria-describedby="emailHelp">
                        <span id="Eregistration"><?php echo $Eregistration; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="phoneNumber" class="form-lebel sm">Phone Number</lebel>
                        <input type="number" name="phoneNumber" class="form-control"
                            placeholder="Enter your phone number" value="<?php echo $phoneNumber; ?>" id="phoneNumber"
                            aria-describedby="emailHelp">
                        <span id="EphoneNumber"><?php echo $EphoneNumber; ?></span>
                    </div>
                    <div class="mb-3">
                        <lebel for="phoneNumber" class="form-lebel sm">Distric</lebel>
                        <select class="form-select" aria-label="Default select example" name="distric" id="distric"
                            value="<?php echo $distric; ?>">
                            <option value="0">Select your distric</option>
                            <option value="Bagerhat">Bagerhat</option>
                            <option value="Bandarban">Bandarban</option>
                            <option value="Barguna">Barguna</option>
                            <option value="Barisal">Barisal</option>
                            <option value="Bhola">Bhola</option>
                            <option value="Bogra">Bogra</option>
                            <option value="Brahmanbaria">Brahmanbaria</option>
                            <option value="Chandpur">Chandpur</option>
                            <option value="Chapai">Chapai</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Chuadanga">Chuadanga</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Cox's Bazar">Cox's Bazar</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Dinajpur">Dinajpur</option>
                            <option value="Faridpur">Faridpur</option>
                            <option value="Gaibandha">Gaibandha</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Gopalganj">Gopalganj</option>
                            <option value="Habiganj">Habiganj</option>
                            <option value="Jamalpur">Jamalpur</option>
                            <option value="Jessore">Jessore</option>
                            <option value="Jhalokati">Jhalokati</option>
                            <option value="Jhenaidah">Jhenaidah</option>
                            <option value="Joypurhat">Joypurhat</option>
                            <option value="Khagrachhari">Khagrachhari</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Kishoreganj">Kishoreganj</option>
                            <option value="Kurigram">Kurigram</option>
                            <option value="Kushtia">Kushtia</option>
                            <option value="Lakshmipur">Lakshmipur</option>
                            <option value="Lalmonirhat">Lalmonirhat</option>
                            <option value="Madaripur">Madaripur</option>
                            <option value="Magura">Magura</option>
                            <option value="Manikganj">Manikganj</option>
                            <option value="Meherpur">Meherpur</option>
                            <option value="Moulvibazar">Moulvibazar</option>
                            <option value="Munshiganj">Munshiganj</option>
                            <option value="Mymensingh">Mymensingh</option>
                            <option value="Naogaon">Naogaon</option>
                            <option value="Narail">Narail</option>
                            <option value="Narayanganj">Narayanganj</option>
                            <option value="Narsingdi">Narsingdi</option>
                            <option value="Natore">Natore</option>
                            <option value="Nawabganj">Nawabganj</option>
                            <option value="Netrokona">Netrokona</option>
                            <option value="Nilphamari">Nilphamari</option>
                            <option value="Noakhali">Noakhali</option>
                            <option value="Pabna">Pabna</option>
                            <option value="Panchagarh">Panchagarh</option>
                            <option value="Patuakhali">Patuakhali</option>
                            <option value="Pirojpur">Pirojpur</option>
                            <option value="Rajbari">Rajbari</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Rangamati">Rangamati</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Satkhira">Satkhira</option>
                            <option value="Shariatpur">Shariatpur</option>
                            <option value="Sherpur">Sherpur</option>
                            <option value="Sirajganj">Sirajganj</option>
                            <option value="Sunamganj">Sunamganj</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Tangail">Tangail</option>
                            <option value="Thakurgaon">Thakurgaon</option>
                        </select>
                        <span id="Edistric"><?php echo $Edistric; ?></span>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>


                </form>
            </div>
        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    function vld() {
        var er = 0;

        if (document.getElementById("studentName").value == '') {
            er++;
            document.getElementById("EstudentName").innerHTML =
                '<span class="R_alert">X Please enter your name Js!</span>';


        }
        if (document.getElementById("fatherName").value == '') {
            er++;
            document.getElementById("EfatherName").innerHTML =
                '<span class="R_alert">X Please enter your father name Js!</span>';


        }
        if (document.getElementById("motherName").value == '') {
            er++;
            document.getElementById("EmotherName").innerHTML =
                '<span class="R_alert">X Please enter your mother name Js!</span>';


        }
        if (document.getElementById("roll").value == '') {
            er++;
            document.getElementById("Eroll").innerHTML =
                '<span class="R_alert">X Please enter your roll number Js!</span>';


        }
        if (document.getElementById("registration").value == '') {
            er++;
            document.getElementById("Eregistration").innerHTML =
                '<span class="R_alert">X Please enter your registration number Js!</span>';


        }
        if (document.getElementById("phoneNumber").value == '') {
            er++;
            document.getElementById("EphoneNumber").innerHTML =
                '<span class="R_alert">X Please enter your phone number Js!</span>';


        }
        if (document.getElementById("distric").value == '0') {
            er++;
            document.getElementById("Edistric").innerHTML =
                '<span class="R_alert">X Please select your distric Js!</span>';


        }
        if (er == 0) {
            return true;
        } else {
            return false;
        }
    }
    </script>
</body>

</html>