
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Now!</title>
        <!-- Font Awesome CDN link-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link href="style.css" rel="stylesheet">

        <script type="text/javascript" src="script.js" defer></script>
    </head>
    <body>
        <div class="login-form-container" id="register">
        <form action="config.php" method="post">
            <h3>Register here</h3>
            <input type="text" class="box" id="name" name="firstname" placeholder="Enter your firstname" autocomplete="off" required>
            <input type="number" class="box" id="age" name="age" placeholder="Enter your age" autocomplete="off" required>
            <input type="email" class="box" id="email" name="email" placeholder="Enter your email" autocomplete="off" required>
            <input type="password" class="box" id="password" name="password" placeholder="Enter your password" autocomplete="off" required>
            <input type="submit" value="Sign Up" class="btn">
            <p>Already have an account? <a href="index.php">Login now</a></p>
        </form>
        </div>
    </body>
</html>