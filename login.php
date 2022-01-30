<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 class="title--singup">Login</h1>
            <form action="validation.php" method="post" class="form">
                <input type="text" placeholder="Email" name="email" class="form__input">
                <input type="password" placeholder="Password" name="password" class="form__input">
                <button type="submit" class="form__button">Enter</button>
            </form>
        </div>
        <span class="return">
            <a href="index.php" class="return__link">Return</a>
        </span>
    </div>
</body>
</html>