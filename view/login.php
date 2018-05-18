<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="login-form">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'sign_up')" id="defaultOpen">Sign Up</button>
        <button class="tablinks" onclick="openCity(event, 'log_in')">Log In</button>
    </div>
    <p>Sign Up for Free</p>
    <div id="sign_up" class="tabcontent">
        <form action="" method="post">
            <div class="usr-info">
                <input class="fname" type="text" name="firstname" placeholder="First Name" required>
                <input class="lname" type="text" name="lastname" placeholder="Last Name" required>
            </div>
            <div class="usr-email">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="usr-pass">
                <input type="password" name="password" placeholder="Set A Password" required>
            </div>
            <div class="btn">
                <input class="btn-start" type="submit" name="submit" value="Get Started">
            </div>
        </form>
    </div>
    <div id="log_in" class="tabcontent">
        <form action="" method="post">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </form>
    </div>
</div>
</body>
</html>

