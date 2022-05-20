<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Login Form Design</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/login_form.css">

    </head>
    <body>
        <main>
        <div class="wrapper">
            <div class="title">Login Form</div>
            <form action="#">
                <div class="field">
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="field">
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="pass-link"><a href="#">Forgot Password?</a></div>
                <div class="field">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
        </main>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/theme.js"></script>

    </body>
</html>