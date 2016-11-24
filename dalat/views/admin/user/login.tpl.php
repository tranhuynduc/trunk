<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - Login</title>
</head>
<body>

<form name="login" method="POST" action="">
    <?php if(isset($error) && $error == true): ?>
        <p style="color:red;">Wrong name or passwrod.</p>
    <?php endif; ?>

    <p>
        <label>Username:</label>
        <input type="text" name="username" value="" />
    </p>
    <p>
        <label>Password:</label>
        <input type="password" name="password" value="" />
    </p>
    <p>
        <input type="submit" value="Login" />
    </p>
</form>

</body>
</html>