<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['total']) && isset($_POST['studentid']) ){
$total=$_POST['total'];
$studentid=$_POST['studentid'];
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($total) && isset($studentid)  ) {
$sql = "UPDATE attendance SET TOTAL_NO_OF_DAYS='$total' WHERE STUDENT_ID=$studentid";

}
//if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//$sql = "INSERT INTO parent (PARENT_ID,PARENT_NAME, PARENT_GENDER, PARENT_AGE,PARENT_OCCUPATION,PARENT_INCOME,PARENT_MOBILE)
//VALUES (parentid,$_POST['parentname'],$_POST['parentgender'],$_POST['parentage'],$_POST['parentoccupation'],$_POST['parentincome'],$_POST['parentmobile'])";


?>

<!DOCTYPE html>
<head>
  <title>UPDATING TOTAL_NO_OF_DAYS FOR A STUDENT IN ATTENDANCE TABLE</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>UPDATING TOTAL_NO_OF_DAYS FOR A STUDENT IN ATTENDANCE TABLE</i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="updateattendance.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">
<?php
if ( isset($studentid) && isset($total) ) {
  // "UPDATE attendance SET NO_OF_DAYS_PRESENT='$present' WHERE STUDENT_ID=$studentid";

if (mysqli_query($conn, $sql)) {
  echo ('<h2 style="color: green;">'."ATTENDANCE UPDATED FOR STUDENT_ID $studentid WITH TOTAL_NO_OF_DAYS AS $total "."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}
}
mysqli_close($conn);
 ?>

  <table style="width:50%;border: 5px solid black;align:center;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="studentid"> STUDENT_ID WHOSE ATTENDANCE NEED TO BE CHANGED:</label><br><br>
    <input type="text" id="studentid" name="studentid"><br><br>
    <label for="total">NEW TOTAL_NO_OF_DAYS:</label><br><br>
    <input type="number" id="total" name="total"><br><br>
   <input type="submit"  value="UPDATE" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
  <table style="width:100%;border: 4px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
  <br><br><br></th></tr>
  </table>
