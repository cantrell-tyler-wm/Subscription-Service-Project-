<h1>Login</h1>
<form method="POST">
    <input type="text" name="username"><br />
    <input type="password" name="password"><br />
    <input type="submit">
</form>
<a href="index.php"><button>home</button></a>
<?php
session_start();
    if(isset($_POST['username'], $_POST['password'])){
     $dbh = new PDO('mysql:host=localhost;dbname=subservice', 'root', 'root');

        $query = dbConnect()->prepare("SELECT username, password FROM users WHERE username=:username AND password=:password");
        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':password', $_POST['password']);
        $query->execute();

        if($row = $query->fetch()){
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        }
    }
?>
