<?php
$servername = "localhost";
$username = "sabhari";
$password = "2000";
$dbname = "student";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['parentid']) && isset($_POST['parentname']) && isset($_POST['parentgender']) && isset($_POST['parentage']) && isset($_POST['parentoccupation']) && isset($_POST['parentincome']) && isset($_POST['parentmobile']) ){
$parentid=$_POST['parentid'];
$parentname=$_POST['parentname'];
$parentgender=$_POST['parentgender'];
$parentage=$_POST['parentage'];
$parentoccupation=$_POST['parentoccupation'];
$parentincome=$_POST['parentincome'];
$parentmobile=$_POST['parentmobile'];
}
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ( isset($parentid) && isset($parentname) && isset($parentgender) && isset($parentage) && isset($parentoccupation) && isset($parentincome) && isset($parentmobile) ) {
$sql = "INSERT INTO parent (PARENT_ID,PARENT_NAME, PARENT_GENDER, PARENT_AGE,PARENT_OCCUPATION,PARENT_INCOME,PARENT_MOBILE)
VALUES ('$parentid','$parentname','$parentgender','$parentage','$parentoccupation','$parentincome','$parentmobile')";
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
  <title>INSERTING DATA INTO PARENT TABLES</title>
</head>
<body>
  <table style="width:100%;border: 5px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</strong></i></h1>
  <h3 style="font-size:150%;font-family:algerian;"><i>INSERTING DATA INTO PARENT TABLE</i></h3><br></th></tr>
</table>
  <table style="width:100%;">
  <tr style="border:5px solid white;background:#1aff1a"><th style="border:5px solid black;font-size:large;width: 50%;"><a href="insert.html">
    <button type="button"> &larr; GO BACK</button></a></th>
    <th style="border:5px solid black;font-size:large;width:50%;"><a href="project.html">
      <button type="button">LOG OUT</button></a></th></tr>
  </table><br><br><br><br><br>
  <div align="center">
<?php
if ( isset($parentid) && isset($parentname) && isset($parentgender) && isset($parentage) && isset($parentoccupation) && isset($parentincome) && isset($parentmobile) ) {

if (mysqli_query($conn, $sql)) {
  echo ('<h2 style="color: green;">'."NEW RECORD INSERTED INTO PARENT TABLE SUCCESSFULLY"."</h2>\n");
} else {
  echo ('<h2 style="color: red;">'."Error: " . $sql . "<br>" . mysqli_error($conn)."</h2>\n");
}
}
mysqli_close($conn);
 ?>

  <table style="width:50%;border: 5px solid black;align:center;">
  <tr><th>
   <form method="POST" style="background:lightyellow;" >
    <label for="parentid">PARENT_ID:</label><br><br>
    <input type="text" id="parentid" name="parentid"><br><br>
    <label for="parentname">PARENT_NAME:</label><br><br>
    <input type="text" id="parentname" name="parentname"><br><br>
    <p>PARENT_GENDER:<br><br>
    <input type="radio" name="parentgender" value="male" checked>MALE<br>
    <input type="radio" name="parentgender" value="female" >FEMALE</p><br><br>
    <label for="parentage">PARENT_AGE:</label><br><br>
    <input type="number" id="parentage" name="parentage" max="100"><br><br>
    <label for="parentoccupation">PARENT_OCCUPATION:</label><br><br>
    <input type="text" id="parentoccupation" name="parentoccupation"><br><br>
    <label for="parentincome">PARENT_INCOME:</label><br><br>
    <input type="text" id="parentincome" name="parentincome"><br><br>
    <label for="parentmobile">PARENT_MOBILE:</label><br><br>
    <input type="text" id="parentmobile" name="parentmobile" maxlength="10"><br><br>
   <input type="submit"  value="INSERT" >
    <input type="reset" value="RESET"></th></tr></table>
    <br><br><br>

</div>
  <table style="width:100%;border: 4px solid black;background:#1aff1a;">
  <tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
  <br><br><br></th></tr>
  </table>
