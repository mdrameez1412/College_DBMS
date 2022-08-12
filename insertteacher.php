<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['teacherid']) && isset($_POST['teacherfname']) && isset($_POST['teacherlname']) && isset($_POST['teachergender']) && isset($_POST['teacherage']) && isset($_POST['teachermobile']) && isset($_POST['teachersubject']) ){
$teacherid =$_POST['teacherid'];
$teacherfname=$_POST['teacherfname'];
$teacherlname=$_POST['teacherlname'];
$teachergender=$_POST['teachergender'];
$teacherage=$_POST['teacherage'];
$teachermobile=$_POST['teachermobile'];
$teachersubject=$_POST['teachersubject'];
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($teacherid) && isset($teacherfname) && isset($teacherlname) && isset($teachergender) && isset($teacherage) && isset($teachermobile) && isset($teachersubject) ) {
$sql = "INSERT INTO teacher (TEACHER_ID,TEACHER_F_NAME, TEACHER_L_NAME, TEACHER_GENDER,TEACHER_AGE,TEACHER_MOBILE,TEACHER_SUBJECT_SPECIALISED)
VALUES ('$teacherid','$teacherfname','$teacherlname','$teachergender','$teacherage','$teachermobile','$teachersubject')";
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
  <title>INSERTING DATA INTO TEACHER TABLE</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>INSERTING DATA INTO TEACHER TABLE</i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="insert.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">
<?php
if ( isset($teacherid) && isset($teacherfname) && isset($teacherlname) && isset($teachergender) && isset($teacherage) && isset($teachermobile) && isset($teachersubject) ) {

if (mysqli_query($conn, $sql)) {
  echo ('<h2 style="color: green;">'."NEW RECORD INSERTED INTO TEACHER TABLE SUCCESSFULLY"."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}
}
mysqli_close($conn);
 ?>

  <table style="width:50%;border: 5px solid black;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="teacherid">TEACHER_ID:</label><br><br>
    <input type="text" id="teacherid" name="teacherid"><br><br>
    <label for="teacherfname">TEACHER_FIRST_NAME:</label><br><br>
    <input type="text" id="teacherfname" name="teacherfname"><br><br>
    <label for="teacherlname">TEACHER_LAST_NAME:</label><br><br>
    <input type="text" id="teacherlname" name="teacherlname"><br><br>



    <p>TEACHER_GENDER:<br><br>
    <input type="radio" name="teachergender" value="male" checked>MALE<br>
    <input type="radio" name="teachergender" value="female" >FEMALE</p><br><br>

    <label for="teacherage">TEACHER_AGE:</label><br><br>
    <input type="number" id="teacherage" name="teacherage" max="65"><br><br>
    <label for="teachermobile">TEACHER_MOBILE:</label><br><br>
    <input type="text" id="teachermobile" name="teachermobile" maxlength="10"><br><br>




    <p><label for="teachersubject">TEACHER_SUBJECT_SPECIALISED:<br><br>
 <select name="teachersubject" id="teachersubject">
   <option value="0">-- Please Select --</option>
   <option value="tamil">TAMIL</option>
   <option value="english">ENGLISH</option>
   <option value="mathematics">MATHEMATICS</option>
   <option value="science">SCIENCE</option>
   <option value="social science">SOCIAL SCIENCE</option>
 </select>
</p><br><br>


   <input type="submit"  value="INSERT" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
  <table style="width:100%;border: 4px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
  <br><br><br></th></tr>
  </table>
