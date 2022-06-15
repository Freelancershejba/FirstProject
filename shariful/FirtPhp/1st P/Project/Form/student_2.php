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
    padding: 20px;
}

tr:nth-child(even) {
    background-color: #ddd;
}
</style>





<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student_info';

$cn = mysqli_connect($host, $username, $password, $dbname);

$sql = "select * from student_2";



$result = mysqli_query($cn, $sql);

echo "<table>";
echo "<tr>";
echo "<th>SN</th>";
echo "<th>Student Name</th>";
echo "<th>Username</th>";
echo "<th>Father Name</th>";
echo "<th>Mother Name</th>";
echo "<th>Email</th>";
echo "<th>Phone Number</th>";
echo "<th>Birthday</th>";
echo "<th>Gender</th>";
echo "<th>Password</th>";
echo "</tr>";

while ($value = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo '<td>' . $value["id"] . '</td>';
    echo '<td>' . $value["student_name"] . '</td>';
    echo '<td>' . $value["username"] . '</td>';
    echo '<td>' . $value["father_name"] . '</td>';
    echo '<td>' . $value["mother_name"] . '</td>';
    echo '<td>' . $value["email"] . '</td>';
    echo '<td>' . $value["phone_number"] . '</td>';
    echo '<td>' . $value["bithday"] . '</td>';
    echo '<td>' . $value["gender"] . '</td>';
    echo '<td>' . $value["password"] . '</td>';
    echo "</tr>";
}
echo "</table>";