<!DOCTYPE html>
<html>
<head>
  <title> contact us</title>
  <style>
  body {
  background-image:url('main.jpg');
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
  .text{
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
  input[type=text],[type=email]{
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
    <h2> Contact us </h2>

<form method="post" action="contactus.php">

      <input type="text" name="name" placeholder="Your name" required>
      <input type="email" name="email" placeholder="Your email" required>
      <textarea class="text" placeholder="Your message"></textarea>
      <input type="submit" name="send_btn" value="send">
      <input type="submit" name="cancel_btn" value="cancel" onClick="history.go(-1);">
</form>
</div>
</body>
</html>
