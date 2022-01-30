<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Singup</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="title--singup">Singup</h1>
            <form action="register.php" method="post" class="form">
                <input type="text" placeholder="Name" name="user" class="form__input">
                <input type="email" placeholder="Email" name="email" class="form__input">
                <input type="password" placeholder="Password" name="password" class="form__input">
                <input type="password" placeholder="Confirm password"name="cpassword" class="form__input">
                <button type="submit" class="form__button">Register</button>
            </form>
        </div>
        <span class="return">
            <a href="index.php" class="return__link">Return</a>
        </span>
    </div>
</body>
</html>