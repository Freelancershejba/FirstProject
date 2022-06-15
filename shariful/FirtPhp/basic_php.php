<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Besic PHP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .header_area {
            width: 100%;
            height: 60px;
            line-height: 60px;
            background: blue;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
        }

        .main_area {
            display: flex;
            width: 100%;

        }

        .side_bar {
            width: 25%;
            height: 100vh;
            background: gray;
            padding: 20px 20px;
        }

        .side_bar ul {
            list-style: none;
        }

        .side_bar ul li {
            padding: 10px 0;
        }

        .side_bar ul li a {
            text-decoration: none;
            color: black;
            font-size: 22px;
        }

        .page_area {
            width: 75%;
            height: 100vh;
            background: #5d5a5a;
            padding: 20px 20px;
            overflow: auto;
        }


        footer {
            background: tomato;
            color: #fff;
            width: 100%;
            height: 200px;
            text-align: center;
            text-transform: uppercase;
            padding-top: 20px;
        }

        .title_view {
            text-align: center;
            font-size: 42px;
            color: #fff;
        }

        form label {
            color: #fff;
            font-size: 20px;
        }

        form input[type="submit"] {
            font-size: 20px;
            font-weight: bold;
            color: tomato;
        }
    </style>
</head>

<body>
    <Section class="header_area">
        <div class="header">
            <h1>Besic PHP</h1>
        </div>
    </Section>
    <Section class="main_area">
        <div class="side_bar">
            <ul>
                <li><a href="?p=basic_php">Home</a></li>
                <li><a href="?p=about">About</a></li>
                <li><a href="?p=product">Product</a></li>
                <li><a href="?p=contact">Contact</a></li>
                <li><a href="?p=account">Account</a></li>
                <li><a href="?p=form">Form</a></li>
            </ul>
        </div>
        <div class="page_area">
            <?php
            if (isset($_GET['p'])) {
                if (file_exists($_GET['p'] . '.php')) {
                    if (file_exists($_GET['p'] . '.php') && $_GET['p'] == "basic_php") {
                        print("<h1 class='title_view'>" . ucwords(str_replace("basic_php", "Home", $_GET['p'])) . "</h1>");
                        echo "<h1>Home page</h1>";
                    } else {
                        print("<h1 class='title_view'>" . ucwords($_GET['p']) . "</h1>");
                        include_once($_GET['p'] . '.php');
                    }
                } else {
                    print("<h1 class='title_view'>Security Warning</h1>");
                    include_once('security.php');
                }
            } else {
                print("<h1 class='title_view'>Home</h1>");
                echo "<h1>Home page</h1>";
            }
            ?>

        </div>
    </Section>
    <footer>
        <h1>Footer</h1>
    </footer>
</body>

</html>