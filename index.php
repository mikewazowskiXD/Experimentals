<?php
session_start();
if (!$_SESSION['logged_in']) {
	header('Location: dashboard.php');
	exit();
} else {
    return 
}
extract($_SESSION['userData']);

$avatar_url='https://cdn.discordapp.com/avatars/$discord_id/$davatar.png';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/styles/style.css" type="text/css">
    <title>Experimentals</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <button class=""><a href="logout.php">Logout</a></button>
    <div class="homepage">
        <h1>Experimentals</h1>
        <p>Welcome to my home page, thank you for visiting.</br><span style="color: red; font-size: 30px; font-weight: bold;"><?php echo $name ?></span></p>
    </div>
</body>
</html>