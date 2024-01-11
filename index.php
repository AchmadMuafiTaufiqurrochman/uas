<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ini Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=" container2">
    <img src="unicorn.png" alt="unicorn">
    <p class="slogan">Terbang Jauh <br>Menembus Angkasa</p>
    </div>
    <div class="container">
        <h1>Ini Login</h1>
        <form  class="form_container" id="loginForm">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" required>

            <input type="submit" name="submit" value="Login">
        </form>
        
    </div>
    <script src="login.js"></script>
</body>

</html>