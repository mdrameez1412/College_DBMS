<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['studentid'])) {
$studentid =$_POST['studentid'];
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($studentid)  ) {

$sql = "SELECT * FROM  fees  WHERE  STUDENT_ID='$studentid' ";


$result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>

<title> FEES RECORD</title>
</head>
<body>
<table style="width:100%;border: 4px solid black;background:lightskyblue;">


<tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i>STUDENTS RECORD MANAGMENT</i></h1>
<h3 style="font-size:150%;font-family:algerian;"><i>FEES RECORD</i></h3>
</th></tr>
</table >
<table style="width:100%;">
<tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="school.html">
  <button type="button"> &larr; GO BACK</button></a></th>
  <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
    <button type="button">LOG OUT</button></a></th></tr>
</table><br><br><br><br><br>
<div align="center">
<table style="width:50%;border: 5px solid black;">
<tr><th>

 <form method="POST" style="background:lightyellow;" >
  <label for="studentid">STUDENT_ID:</label><br><br>
  <input type="text" id="studentid" name="studentid"><br><br>

  <input type="submit"  value="VIEW" >
  <input type="reset" value="RESET"></th></tr></table>
  <br><br><br></div>

<div align="center">
<table style="border:5px solid black;background:lightyellow;">
  <th style="border:3px solid black;font-size:large;color:red;">STUDENT ID</th>
  <th style="border:3px solid black;font-size:large;color:red;">FIRST TERM</th>

  <th style="border:3px solid black;font-size:large;color:red;">SECOND TERM</th>
  <th style="border:3px solid black;font-size:large;color:red;">THIRD TERM</th>
<!--  <th style="border:3px solid black;font-size:large;color:red;">PARENT OCCUPATION</th>
  <th style="border:3px solid black;font-size:large;color:red;">PARENT INCOME</th>
  <th style="border:3px solid black;font-size:large;color:red;">PARENT MOBILE</th>-->

<?php
if ( isset($studentid)  ) {
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {



?>
<tr style="border:3px solid black;">


  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo  $row["STUDENT_ID"];?></td></div>
  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo  $row["FIRST_TERM"];?></td></div>

  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo $row["SECOND_TERM"];?></td></div>
  <td style="border:3px solid black;font-size:large;"><div align="center"><?php echo  $row["THIRD_TERM"];?></td></div>

<?php
  }
} else {
  echo "0 results";
}
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
