<?php
session_start();
?>

<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: ../index.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =mysqli_query($con, "SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysqli_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_username']=$username;

    /* Redirect browser */
    header("Location: ../index.php");
    }
    } else {

 $message =  "Неверное имя пользователя или пароль!";
    }

} else {
    $message = "Заполните все поля!";
}
}
?>




    <div class="container mlogin">
            <div id="login">
    <h1>Вход в систему</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">Логин пользователя<br />
        <input type="text" name="username" id="username" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Пароль<br />
        <input type="password" name="password" id="password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Войти" />
    </p>
	<a href="/~zelenin_d_a/index.php">Выйти</a>
       
</form>

    </div>

    </div>
	

	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "Внимание: ". $message . "</p>";} ?>
	