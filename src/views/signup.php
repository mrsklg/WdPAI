<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <title>Atsumari - sign up</title>
</head>
<body class="flex-row-center-center">
    <main class="flex-column-space-around-center">
        <img src="/public/images/Atsumari.png">
        <div class="form-container">
            <h2>Create an account</h2>
            <form class="flex-column-space-around-center" method="POST" action="signup">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="surname" placeholder="Surname" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                <button type="submit" class="default-btn">Create account</button>
            </form>
            <p class="comment">I Already Have an Account. <a href="./login">Login</a></p>
        </div>
    </main>
</body>
</html>