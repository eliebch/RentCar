<?php

  session_start();
$db = mysqli_connect("localhost","root","0000","signup");

if(isset($_POST['register_btn'])){
  $firstname =$_POST['firstName'];
  $lastname =$_POST['lastName'];
  $username=$_POST['userName'];
  $email =$_POST['email'];
  $password1  =$_POST['password1'];
  $password2 =$_POST['password2'];

  if($password1 == $password2){
    // create user
    //$password1= md5($password1); // hash password before storing for security purposes
    $sql=" INSERT INTO signup(firstName,lastName,userName,email,password) values('$firstname','$lastname','$username','$email','$password1')";
    mysqli_query($db,$sql);
      $_SESSION['message'] = 'You are now logged in';
      echo $_SESSION['message'];
  //   $_session['username']=$username;
    header("location: suite.php"); //redirect to home page
  }else{
    //fail
    $_SESSION['message'] = 'The two passwords do not match';
    echo $_SESSION['message'];
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title> Sign up </title>
  <style>
  body {
  background-image:url('like.jpg');
  background-size:cover;
  font-family:Arial;
  }

  .class1{
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
input[type=text],input[type=password],input[type=email]{
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
  <div class="class1">
    <h2> Sign up here </h2>

<form method="post" action="signup.php">

      <input type="text" name="firstName" placeholder="FirstName..." required>
      <input type="text" name="lastName" placeholder="LastName..." required>
      <input type="text" name="userName" placeholder="UserName..." required>
      <input type="email" name="email" placeholder="Email..." required>
      <input type="password" name="password1" placeholder="Password..." required>
      <input type="password" name="password2" placeholder="re-enter your password" required>
      <input type="submit" name="register_btn" value="Register">
      <input type="submit" name="cancel_btn" value="cancel" onClick="history.go(-1);">

</form>
</div>
</body>
</html>
