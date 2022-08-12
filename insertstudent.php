<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['studentid']) && isset($_POST['studentfname']) && isset($_POST['studentlname']) && isset($_POST['studentgender']) && isset($_POST['dob']) && isset($_POST['bloodgroup']) && isset($_POST['parentid']) ){
$studentid =$_POST['studentid'];
$studentfname=$_POST['studentfname'];
$studentlname=$_POST['studentlname'];
$studentgender=$_POST['studentgender'];
$dob=$_POST['dob'];
$bloodgroup=$_POST['bloodgroup'];
$parentid=$_POST['parentid'];
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($studentid) && isset($studentfname) && isset($studentlname) && isset($studentgender) && isset($dob) && isset($bloodgroup) && isset($parentid) ) {
$sql = "INSERT INTO student (STUDENT_ID,STUDENT_F_NAME, STUDENT_L_NAME, STUDENT_GENDER,DATE_OF_BIRTH,BLOOD_GROUP,PARENT_ID)
VALUES ('$studentid','$studentfname','$studentlname','$studentgender','$dob','$bloodgroup','$parentid')";
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
  <title>INSERTING DATA INTO STUDENT TABLE</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>INSERTING DATA INTO STUDENT TABLE</i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="insert.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">
<?php
if ( isset($studentid) && isset($studentfname) && isset($studentlname) && isset($studentgender) && isset($dob) && isset($bloodgroup) && isset($parentid) ) {


if (mysqli_query($conn, $sql)) {
  echo ('<h2 style="color: green;">'."NEW RECORD INSERTED INTO STUDENT TABLE SUCCESSFULLY"."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}
}
mysqli_close($conn);
 ?>

  <table style="width:50%;border: 5px solid black;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="studentid">STUDENT_ID:</label><br><br>
    <input type="text" id="studentid" name="studentid"><br><br>
    <label for="studentfname">STUDENT_FIRST_NAME:</label><br><br>
    <input type="text" id="studentfname" name="studentfname"><br><br>
    <label for="studentlname">STUDENT_LAST_NAME:</label><br><br>
    <input type="text" id="studentlname" name="studentlname"><br><br>
    

    <p>STUDENT_GENDER:<br><br>
    <input type="radio" name="studentgender" value="male" checked>MALE<br>
    <input type="radio" name="studentgender" value="female" >FEMALE</p><br><br>


    <label for="dob">DATE_OF_BIRTH:</label><br><br>
    <input type="date" id="dob" name="dob"><br><br>
    <label for="bloodgroup">BLOOD_GROUP:</label><br><br>
    <input type="text" id="bloodgroup" name="bloodgroup"><br><br>
    <label for="parentid">PARENT_ID:</label><br><br>
    <input type="text" id="parentid" name="parentid"><br><br>
   <input type="submit"  value="INSERT" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
  <table style="width:100%;border: 4px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
  <br><br><br></th></tr>
  </table>
