<?php
if(isset($_POST['submit'])){
$Firstname = $_POST['fname'];
$Lastname = $_POST['lname'];
$yearofstudy=$_POST['Year'];
$program=$_POST['program'];
$department = $_POST['department'];
$state=$_POST['State'];
$nationality=$_POST['Country'];
$dateofbirth=$_POST['dob'];
$placeofbirth=$_POST['pob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$marritalstatus=$_POST['Maritalstatus'];
$religion=$_POST['Religion'];
$contactaddress=$_POST['cadd'];

if(empty($Firstname)|| empty($Lastname)|| empty($yearofstudy)
||empty($program)|| empty($department)||empty($state)
||empty($nationality)||empty($dateofbirth)||empty($placeofbirth)
||empty($gender)||empty($email)||empty($marritalstatus)||empty($religion)
||empty($contactaddress)){
?>
<script>
alert("Please all fields are required!");
window:location="main.html";
</script>
<?php
}else{


$connect = mysqli_connect("localhost","root","");// or die(mysql_error());
$conn = mysqli_select_db($connect ,"udsm");

if (!$conn){
    die(mysql_error());
}
$insert = "INSERT INTO `coict` VALUES ('','$Firstname','$Lastname','$yearofstudy','$program',
  '$department','$state','$nationality','$dateofbirth',
'$placeofbirth','$gender','$email','$marritalstatus','$religion','$contactaddress')";
//print_r($insert); exit;
if($run = mysqli_query($connect,$insert)){
?>
<script>
alert("You have successfully registered. Thanks...");
window:location="main.html";
</script>
<?php
}else{
echo '<P style=background:blue;color:white;padding:6px;>Sorry we were unable to register you now.
 try again later.<a href="form.php">Click here to insert.</p>'.mysqli_error($connect);
}
}
}
?>
