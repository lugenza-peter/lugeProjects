<?php
session_start();
$username ="";
$email ="";
$errors =array();
$db = mysqli_connect('localhost','root','','registration');

 if(isset($_POST['register'])){
   $username =$_POST["username"];
   $email =$_POST["email"];
   $password_1 =$_POST["password_1"];
   $password_2 =$_POST["password_2"];

   $username = mysqli_real_escape_string($db,$username);
   $email= mysqli_real_escape_string($db,$email);
   $password_1 = mysqli_real_escape_string($db,$password_1);
   $password_2 = mysqli_real_escape_string($db,$password_2);

   if(empty($username)){
     array_push($errors, "username is required");
   }

     if(empty($email)){
       array_push($errors, "Email is required");
     }

     if(empty($password_1)){
       array_push($errors, "password is required");
     }

     if($password_1 != $password_2){
       array_push($errors, "The two password do not match");
     }

            if(count($errors)==0){
              $password = md5($password_1);//badili nenolasiri kabla ya kuwekwa kwa stoo....
              $sql ="INSERT INTO login (id,username,email,password) VALUES
              ('','$username','$email','$password')";
                mysqli_query($db,$sql);

              }
            }

//log user in from loginpage
if(isset($_POST['login'])){

  $username = mysqli_real_escape_string($db,$_POST["username"]);
  $password = mysqli_real_escape_string($db,$_POST["password"]);

  if(empty($username)){
    array_push($errors, "username is required");
    }

    if(empty($password)){
      array_push($errors, "password is required");
    }
    if(count($errors) ==0){
      $password =md5($password);//ficha password isionekane kwa database
      $query ="SELECT * FROM login WHERE username='$username' AND password ='$password'";
      $result =mysqli_query($db,$query);
      if (mysqli_num_rows($result) == 1) {
        //log user in
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location:index.php');//peleka kwa home page
      }else{
        array_push($errors, "Wrong username/password combination");

      }
    }

  }

//logout
if (isset($_GET['logout'])){
session_destroy();
unset($_SESSION['username']);
header('location:login.php');

 }
?>
