<?php
session_start();
$db = mysqli_connect("localhost","root","0000","signup");
if(isset($_POST['logIn_btn'])){
  if(empty($_POST['userName'])||empty($_POST['password'])){
    $error="Invalid userName or password";
  }
  else{
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $sql="select * from signup where userName='$userName' and password='$password'";
    $result=mysqli_query($db,$sql);
    $count = mysqli_num_rows($result);
    if($count==1){
      header("location:suite.php");
    }
    else{
      ?>
    <script> confirm("UserName or password Incorrect!"); </script>
    <?php
    }
  }
}
?>
<!DOCTYPE html>
<head>
<title> Login </title>
<style>
body{
  background:url('main.jpg');
  family-font:Arial;
  background-size:cover;
}
.class2{
  max-width:350px;
  border-radius:20px;
  margin:auto;
  background:rgba(0,0,0,0.8);
  box-sizing:border-box;
  padding:40px;
  color:#fff;
  margin-top:100px;
}

h2{
  text-align:center;
}
input[type=text],input[type=password]{
  width:100%;
  box-sizing:border-box;
  padding: 12px 5px;
  background:rgba(0,0,0,0.10);
  outline:none;
  border:none;
  border-bottom:1px dotted #fff;
  color:#fff;
  border-radius:5px;
  margin:5px;
  font-weight:bold;
}
input[type=submit]{
  width:100%;
  box-sizing:border-box;
  padding:10px;
  margin-top:30px;
  outline:none;
  border:none;
  background:#60adde;
  opacity:0.7;
  border-radius:20px;
  font-size:20px;
  color:#fff;
  }

  input[type=submit]:hover{
  background:#003366;
  opacity:0.7;
  }
</style>
</head>
<body>
  <form method="post" action="login.php">
  <div class="class2">
    <h2> Login here </h2>
    <input type="text" name="userName" placeholder="userName..." required>
    <input type="password" name="password" placeholder="password..." required>
    <input type="submit" name="logIn_btn" value="Log In" >
    <input type="submit" name="cancel_btn" value="cancel" onClick="history.go(-1);">
  </div>
</form>
</body>
</html>
