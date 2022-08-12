<?php


$stored_hash = 'sabhari';
$id='sabhari';
$failure = false;


if ( isset($_POST['admin']) && isset($_POST['pwd']) ) {
    if ( strlen($_POST['admin']) < 1 || strlen($_POST['pwd']) < 1 ) {
        $failure = "User name and password are required";
    } else {
        $check = $_POST['pwd'];
        $check1=$_POST['admin'];
        if( $check1 == $id ){
          if ( $check == $stored_hash ) {

              header("Location: admin1.html");
              return;
            } else {
              $failure = "Incorrect password";
            }
        }else{
          $failure = "Incorrect user id";
        }
    }
}


?>




<!DOCTYPE html>
<html>
<head>

<title> STUDENTS RECORD MANAGMENT</title>
</head>
<body style="background-color:darkgray;">
<table style="width:100%;border: 4px solid black;background:lightskyblue;">


<tr><th><h1 style="color:black;type:bold;font-size:300%;font-family:verdana;"><i><strong>STUDENTS RECORD MANAGMENT</i></strong></h1>
<h3 style="font-size:150%;font-family:algerian;"><i>ADMIN LOGIN</i></h3>
</th></tr>
</table><br><br><br><br><br>
<style >
body {
  background-image: url('admin.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
if ( $failure !== false ) {

    echo('<h2 style="color: red;">'.htmlentities($failure)."</h2>\n");
}
?>
<table style="width:25%;border: 4px solid black;align:centre">
<tr><th>
 <form method="POST" style="background:lightyellow;" >
  <label for="admin">ADMIN ID:</label><br><br>
  <input type="text" id="admin" name="admin"><br><br>
  <label for="pwd">PASSWORD:</label><br><br>
  <input type="password" id="pwd" name="pwd"><br><br>
 <input type="submit"  value="LOGIN" >
  <input type="reset" value="RESET">
  <a href="project.html"><button type="button">HOME PAGE</button></a><br><br><br>

</form></th></tr></table><br><br><br><br><br><br><br><br>
<table style="width:100%;border: 4px solid black;background:lightskyblue;">
<tr><th><h1 style="color:black;type:bold;font-size:200%;font-family:algerian;"><i><strong>DONE AND MAINTAINED BY:<br> SABHARI P<br>2018103582<br></i></strong></h1>
<br><br><br></th></tr>
</table>
</div>

</body>
</html>
