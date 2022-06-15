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

    <title>Admission form</title>



</head>

<body>
    <section class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="head_title text-center">
                    <h1>SM Admission-2022</h1>
                    <h3>Sensitive Medicale Collage, Dhaka, Bangladesh.</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 side_area">
                    <div class="menu">
                        <ul>
                            <li><a href="?p=form">Admission Form</a></li>
                            <li><a href="?p=student_info">Students Information</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-9 main_area">

                    <?php


                    if (isset($_GET['p'])) {
                        if (file_exists($_GET['p'] . '.php')) {
                            include_once($_GET['p'] . '.php');
                        } else {
                            include_once('security.php');
                        }
                    } else {
                        include_once('form.php');
                    }

                    ?>

                </div>

            </div>
        </div>
    </section>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>