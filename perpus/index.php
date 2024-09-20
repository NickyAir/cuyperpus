<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuyPerpus</title>
    <link rel="stylesheet" href="stylea.css">
</head>
<body>
    <form action="login.php" method="post">
        <div class="logo">
            <img src="Book.png" alt="buku">
        </div>
        <h2 style="text-align: center;">CuyPerpus</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php }?>
        <label for="">User Name</label>
        <input type="text" name="uname" placeholder="User Name">
        
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password">

        <button type="submit">Login</button>
    </form>
</body>
</html>
