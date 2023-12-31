<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <title>Atsumari - login</title>
</head>
<body class="flex-row-center-center">
    <main class="flex-column-space-around-center">
        <img src="/public/images/Atsumari.png">
        <div class="form-container">
            <h2>Welcome back!</h2>
            <div class="messages">
                <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                           echo "<p>$message</p>";
                        }
                    }
                ?>
            </div>
            <form class="flex-column-space-around-center" action="login" method="POST">
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="default-btn">Login</button>
            </form>
            <p class="comment">Create an account. <a href="./signup">Sign Up</a></p>
        </div>
    </main>
</body>
</html>