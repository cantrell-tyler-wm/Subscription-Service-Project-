<?php
if (isset($_POST["submit"])) {

$dbh = new PDO('mysql:host=localhost;dbname=subservice', 'root', 'root');
$stmt = $dbh->prepare("INSERT INTO users(username, email, password) values (:username, :email, :password)");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$stmt->execute(array("username"=>$username, "email"=>$email, "password"=>$password));
echo "<p>Thank you for registering!</p>";
}
?>
<HTML>
<head>
<title>Simple Registration Page To Use PDO</title>
</head>
<body>
  <form action="" method="post">
  <label> Enter Your Name</label><input type="text" name="username" id="userid"></input>
    <br>
    <label> Enter Your Email</label>
  <input type="email" name="email" id="email"></input> <br>
  <label> Enter  Password </label>
  <input type="password" name="password" id="password"></input>
  <input type="submit" value="Register" name="submit" />
</form>
</body>
</html>
