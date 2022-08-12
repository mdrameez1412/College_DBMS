<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['examid']) && isset($_POST['examtype']) && isset($_POST['startdate'])){
$examid =$_POST['examid'];
$examtype=$_POST['examtype'];
$startdate=$_POST['startdate'];
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($examid) && isset($examtype) && isset($startdate)) {
$sql = "INSERT INTO exam (EXAM_ID,EXAM_TYPE, START_DATE)
VALUES ('$examid','$examtype','$startdate')";
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
  <title>INSERTING DATA INTO EXAM TABLES</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>INSERTING DATA INTO EXAM TABLE </i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="insert.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">
<?php
if ( isset($examid) && isset($examtype) && isset($startdate)) {

if (mysqli_query($conn, $sql)) {
  echo ('<h2 style="color: green;">'."NEW RECORD INSERTED INTO EXAM TABLE SUCCESSFULLY"."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}
}
mysqli_close($conn);
 ?>

  <table style="width:50%;border: 5px solid black;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="examid">EXAM_ID:</label><br><br>
    <input type="text" id="examid" name="examid"><br><br>

    <p><label for="examtype">EXAM_TYPE:<br><br>
 <select name="examtype" id="examtype">
   <option value="0">-- Please Select --</option>
   <option value="first term">FIRST TERM</option>
   <option value="second term">SECOND TERM</option>
   <option value="third term">THIRD TERM</option>
 </select>
</p><br><br>


    <label for="startdate">START_DATE:</label><br><br>
    <input type="date" id="startdate" name="startdate"><br><br>
     <input type="submit"  value="INSERT" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
  <table style="width:100%;border: 4px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
  <br><br><br></th></tr>
  </table>
