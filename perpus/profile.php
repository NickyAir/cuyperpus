<?php
session_start();

if (isset($_SESSION["id"]) && isset($_SESSION["user_name"])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["name"]; ?></h1>
    <h1>Your NIM: <?php echo $_SESSION["id"]; ?></h1>
    <a href="logout.php">Logout</a>
    <a href="dashboard.html">Back</a>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>