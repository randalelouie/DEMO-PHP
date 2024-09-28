<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="Post">
        <div>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        </div>

        <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        </div>

        <div>
        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1">
        </div>

        <div>
        <label for=confirm-password>confirm password</label>
        <input type="password" name="confirm-password" id="confirm-password">
        </div>

        <div>
        <input type="submit" value="register">
        </div>

    </form>

</body>
</html>