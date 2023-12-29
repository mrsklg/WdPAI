<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/settings.css">
    <link rel="stylesheet" href="/public/css/settings_admin.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Settings</title>
</head>
<body class="flex-row-center-center body-nav">
    <main class="flex-column-space-around-center">
        <div class="basic-settings flex-column-space-around-center">
            <div class="flex-column-space-around-center images">
                <img class="logo" src="/public/images/Atsumari.png">
                <img src="/public/images/avatar-img.png">
            </div>
            <div class="form-container">
                <h2 class="manage-text">Manage Your Account</h2>
                <button class="default-btn" href="./signup">Change password</button>
                <button class="default-btn" href="./signup">Delete account</button>
                <button class="default-btn" href="./signup">Logout</button>
            </div>
        </div>
        <div class="history flex-column-space-around-center">
            <h4>Manage Users</h4>
            <div class="session-info flex-row-center-center user-info">
                <div class="flex-column-space-around-center session-details user-img">
                    <img class="avatar-img-admin" src="/public/images/avatar-img.png">
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">Jane Doe</p>
                    <p class="dark">jane.doe@mail.com</p>
                </div>
                <button class="small-btn">Delete User</button>
            </div>
            <div class="session-info flex-row-center-center user-info">
                <div class="flex-column-space-around-center session-details user-img">
                    <img class="avatar-img-admin" src="/public/images/avatar-img.png">
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">Jane Doe</p>
                    <p class="dark">jane.doe@mail.com</p>
                </div>
                <button class="small-btn">Delete User</button>
            </div>
            <div class="session-info flex-row-center-center user-info">
                <div class="flex-column-space-around-center session-details user-img">
                    <img class="avatar-img-admin" src="/public/images/avatar-img.png">
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">Jane Doe</p>
                    <p class="dark">jane.doe@mail.com</p>
                </div>
                <button class="small-btn">Delete User</button>
            </div>
            <div class="session-info flex-row-center-center user-info">
                <div class="flex-column-space-around-center session-details user-img">
                    <img class="avatar-img-admin" src="/public/images/avatar-img.png">
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">Jane Doe</p>
                    <p class="dark">jane.doe@mail.com</p>
                </div>
                <button class="small-btn">Delete User</button>
            </div>
            <div class="session-info flex-row-center-center user-info">
                <div class="flex-column-space-around-center session-details user-img">
                    <img class="avatar-img-admin" src="/public/images/avatar-img.png">
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">Jane Doe</p>
                    <p class="dark">jane.doe@mail.com</p>
                </div>
                <button class="small-btn">Delete User</button>
            </div>
        </div>
    </main>
    <nav class="flex-row-center-center navbar">
        <ul class="flex-row-center-center nav-list">
            <li><a href="./dashboard"><i class="fa-solid fa-house fa-2x"></i></a></li>
            <li><a href="./current_book"><i class="fa-solid fa-book fa-2x"></i></a></li>
            <li><a href="./collection"><i class="fa-solid fa-box fa-2x"></i></a></li>
            <li><a href="./stats"><i class="fa-solid fa-chart-column fa-2x"></i></a></li>
            <li><a href="<?= $_COOKIE['user_id'] == 40 ? "settings_admin" : "settings" ?>" class="nav-avatar"><img class="avatar-img-nav" src="/public/images/avatar-img.png"></a></li>        </ul>
    </nav>
</body>
</html>