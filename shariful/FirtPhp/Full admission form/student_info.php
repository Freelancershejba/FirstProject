<div class="main_area_title">
    <h2>student info</h2>
</div>

<?php
$search = '';
if (isset($_POST['searchbtn'])) {
    $search = $_POST['searchvalue'];
}
?>


<form class="search_form" method="POST" action="">
    <input type="text" class="form-control" id="exampleInputEmail1" name="searchvalue" value="<?php echo $search; ?>"
        placeholder="Search your name!" aria-describedby="emailHelp">
    <button type="submit" class="btn btn-primary" name="searchbtn">Search</button>
</form>

<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'admissioin_form';

$cn = mysqli_connect($host, $username, $password, $dbname);

$sql = "select * from student_info";

if ($search != '') {
    $sql .= " where student_name like '%$search%'";
}



$result = mysqli_query($cn, $sql);

echo "<table>";
echo "<tr>";
echo "<th>SN</th>";
echo "<th>Student Name</th>";
echo "<th>Father Name</th>";
echo "<th>Mother Name</th>";
echo "<th>Roll</th>";
echo "<th>Registration</th>";
echo "<th>Phone Number</th>";
echo "<th>Distric</th>";
echo "</tr>";


while ($value = mysqli_fetch_assoc($result)) {
    // echo "<tr>";
    // echo '<td>' . $value["id"] . '</td>';
    // echo '<td>' . $value["student_name"] . '</td>';
    // echo '<td>' . $value["father_name"] . '</td>';
    // echo '<td>' . $value["mother_name"] . '</td>';
    // echo '<td>' . $value["roll"] . '</td>';
    // echo '<td>' . $value["registration"] . '</td>';
    // echo '<td>' . $value["phone_number"] . '</td>';
    // echo '<td>' . $value["distric"] . '</td>';
    // echo "</tr>";
    echo "<tr>";
    echo '<td>' . $value["id"] . '</td>';
    echo '<td>' . htmlentities(str_replace($search, "<span style='background-color:yellow;'>" . $search . "</span>", $value["student_name"])) . '</td>';
    echo '<td>' . htmlentities($value["father_name"]) . '</td>';
    echo '<td>' . htmlentities($value["mother_name"]) . '</td>';
    echo '<td>' . htmlentities($value["roll"]) . '</td>';
    echo '<td>' . htmlentities($value["registration"]) . '</td>';
    echo '<td>' . htmlentities($value["phone_number"]) . '</td>';
    echo '<td>' . htmlentities($value["distric"]) . '</td>';
    echo "</tr>";
}
echo "</table>";