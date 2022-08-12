<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM exam";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>

<title> EXAM RECORD</title>
</head>
<body>
<table style="width:100%;border: 4px solid black;background:lightskyblue;">


<tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i>STUDENTS RECORD MANAGMENT</i></h1>
<h3 style="font-size:150%;font-family:algerian;"><i>EXAM RECORD</i></h3>
</th></tr>
</table >
<table style="width:100%;">
<tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="school.html">
  <button type="button"> &larr; GO BACK</button></a></th>
  <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
    <button type="button">LOG OUT</button></a></th></tr>
</table><br><br><br><br><br>
<div align="center">
<table style="border:5px solid black;background:lightyellow; width="100%"">
  <th style="border:3px solid black;font-size:large;color:red;">EXAM ID</th>
  <th style="border:3px solid black;font-size:large;color:red;">EXAM TYPE</th>
  <th style="border:3px solid black;font-size:large;color:red;">EXAM START DATE</th>



<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {



?>
<tr style="border:3px solid black;">

  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo  $row["EXAM_ID"];?></td></div>
  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo $row["EXAM_TYPE"];?></td></div>
  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo $row["START_DATE"]; ?></td></div>
</tr>


<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?></div>
</table><br><br><br><br><br><br><br>
<table style="width:100%;border: 4px solid black;background:lightskyblue;">
<tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
<br><br><br></th></tr>
</table>


</body>
</html>
