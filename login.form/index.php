<?php include('server.php');

//if user is not logged in, they cannot acess this password_get_info
if(empty($_SESSION['username'])){
  header('location: login.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>User register</title>
  <link rel='stylesheet' type='text/css' href='style.css'>

</head>
<body>
  <div class="header">
       <h2>home page</h2>
  </div>
  <div class="content">
    <?php if (isset($_SESSION['success'])): ?>
               <div class="error success">
                 <h3>
                   <?php
                   echo $_SESSION['success'];
                   unset($_SESSION['success']);
                    ?>
                 </h3>

               </div>
    <?php endif ?>

      <?php if(isset($_SESSION["username"])): ?>
        <P>
          welcome <strong><?php echo $_SESSION['username']; ?></strong>
        </P>

        <P>
        <a href="index.php?logout='1'" style="color:red;">Logout</a>
        </P>
      <?php endif ?>

  </div>

</body>
</html>
