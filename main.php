<!DOCTYPE html>
<html>
<head>
  <title> rentCar </title>
  <style>
  body {
  background-image:url('main.jpg');
  background-size:cover;
  font-family:Arial;
  }

  .nav{
    float: right;
    list-style: none;
    margin-top : 30px;
  }
  .nav li{
    display: inline-block;
  }

  .nav li a{
    color: #fff;
    padding: 5px 20px;
    text-decoration:none;
    font-family:poppins;
    font-size: 25px;
  }
  .nav li a:hover{
    background: #fff;
    color: #333;
  }
  .welcomeText{
    position: absolute;
    width: 600px;
    height: 300px;
    margin: 20% 30%;
    text-align: center;
  }

  .welcomeText h1{
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size:60px;
  }

  .welcomeText a{
    border: 1px solid #fff;
    padding: 10px 25px;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 20px;
    display: inline-block;
    color : #fff;
  }

  .welcomeText a:hover{
    background: #fff;
    color: #333;
  }
  </style>
</head>
<body>

    <div class="all">
    <ul class="nav">
      <li><a href="main.php">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="login.php">logIn</a></li>
      <li><a href="signup.php">SignUp</a></li>
    </ul>

    <div class="welcomeText">
      <h1> Find the right car for you! </h1>
      <a href="contactus.php"> Contact us </a>
    </div>
</div>


</body>
</html>
