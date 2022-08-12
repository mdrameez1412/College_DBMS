<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['teacherid'])) {
$teacherid=$_POST['teacherid'];
}
if(isset($teacherid)){
$sql = "DELETE FROM teacher WHERE TEACHER_ID=$teacherid";
}

?>

<!DOCTYPE html>
<head>
  <title>DELETING A TEACHER DATA</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>DELETING A TEACHER DATA</i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="delete.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">

<?php
if(isset($teacherid)){
if (mysqli_query($conn, $sql)) {
   //if ($conn->query($sql) === TRUE) {
  echo ('<h2 style="color: green;">'. " TEACHER RECORD DELETED SUCCESFULLY"."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}

mysqli_close($conn);
}
 ?>
  <table style="width:50%;border: 5px solid black;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="teacherid">TEACHER_ID:</label><br><br>
    <input type="text" id="teacherid" name="teacherid"><br><br>
    <input type="submit"  value="DELETE" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
<table style="width:100%;border: 4px solid black;background:#1aff1a;">
<tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
<br><br><br></th></tr>
</table>
