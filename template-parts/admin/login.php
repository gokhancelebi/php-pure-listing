<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=home_url('assets/css/bundle.css')?>">
</head>
<body>

<div class="login-page">
    <h2>
        Login Form
    </h2>
    <form action="" method="post">
        <div class="form-row">
            <label for="username">E-Mail</label>
            <input type="text" name="email" id="email" placeholder="Enter your username">
        </div>
        <div class="form-row">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
        </div>
        <div class="form-row">
            <button class="submit-button" type="submit">Login</button>
        </div>
        <input type="hidden" name="login" value="login">
    </form>
</div>

</body>
</html>