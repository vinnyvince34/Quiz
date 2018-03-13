<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="Style.css" />
    <title>Quiz</title>
</head>
<body>
    <form action="" method='post' name="LoginForm">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <br>
        <button type="submit">Login</button>
        <br>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <br>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <?php
    include("config.php");
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
        echo $sql + $e.getMessage();
        }

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {   
        $myusername = mysqli_real_escape_string($db,$_POST['uname']);
        $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
        
        $sql = "SELECT UserID FROM user WHERE Username = '$myusername' and Password = '$mypassword'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        
        $count = mysqli_num_rows($result);
            
        if($count == 1) 
        {
            session_register("myusername");
            $_SESSION['login_user'] = $myusername;
            
            header("location: Main_User.php");
        }
        else 
        {
            $error = "Your Login Name or Password is invalid";
        }
    }
    ?>
</form>
</body>
</html>