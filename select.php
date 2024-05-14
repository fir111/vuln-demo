<?php
$con = mysqli_connect('localhost', 'user', 'password', 'demo');
if ($con->connect_error){ die("Connection failed".$con->connect_error); }

$sql = "select * from test where super_user='".$_GET['super_user']."' and is_active=1;";

$result = mysqli_query($con, $sql);

echo "<table><tr><th>name</th><th>password</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['password']."</td>";
echo "</td>";
}
echo "</table>";

mysqli_close($con);
?>