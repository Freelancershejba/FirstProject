<style>
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;

}

table,
th,
td {
    border: 1px solid #a3a3a3;
    padding: 18px;
}

tr:nth-child(even) {
    background-color: #ddd;
}

form {
    width: 80%;
    margin: 0 auto;
    margin-bottom: 10px;

}

input {
    width: 80%;
    padding: 10px;


}

button {
    width: 19%;
    margin-left: 8px;
    padding: 10px;

}




span {
    background-color: yellow;
}
</style>
<?php
$search = '';
if (isset($_POST['searchbtn'])) {
    $search = $_POST['searchvalue'];
}
?>


<form method="POST" action="">
    <input type="text" class="form-control" id="exampleInputEmail1" name="searchvalue" value="<?php echo $search; ?>"
        placeholder="Search your name!" aria-describedby="emailHelp">
    <button type="submit" class="btn btn-primary" name="searchbtn">Search</button>
</form>


<?php
$host = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'student_info';

$cn = mysqli_connect($host, $userName, $password, $databaseName);

$sql = "select * from student";


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
    echo "<tr>";
    echo '<td>' . $value["id"] . '</td>';
    echo '<td>' . str_replace($search, "<span>$search</span>", $value["student_name"]) . '</td>';
    echo '<td>' . $value["father_name"] . '</td>';
    echo '<td>' . $value["mother_name"] . '</td>';
    echo '<td>' . $value["roll"] . '</td>';
    echo '<td>' . $value["registration"] . '</td>';
    echo '<td>' . $value["phone_number"] . '</td>';
    echo '<td>' . $value["distric"] . '</td>';
    echo "</tr>";
}
echo "</table>";