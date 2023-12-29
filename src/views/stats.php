<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/stats.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Statistics</title>
</head>
<body class="flex-row-center-center body-nav">
    <main class="flex-column-space-around-center">
        <h1>Your reading stats</h1>
        <div class="stats-container flex-column-space-around-center">
            <div class="chart-container all-time flex-column-space-around-center">
                <h3>All time</h3>
                <div>
                    chart
                </div>
            </div>
            <div class="chart-container last-year flex-column-space-around-center">
                <h3>Last year</h3>
                <div>
                    chart
                </div>
            </div>
            <div class="stats-general flex-row-center-center">
                <div class="flex-column-space-around-center">
                    <p>Your reading speed <span>1</span> page/min</p>
                </div>
                <div class="flex-column-space-around-center">
                    <p>Your read <span>30</span> books so far</p>
                </div>
            </div>
        </div>
    </main>
    <nav class="flex-row-center-center navbar">
        <ul class="flex-row-center-center nav-list">
            <li><a href="./dashboard"><i class="fa-solid fa-house fa-2x"></i></a></li>
            <li><a href="./current_book"><i class="fa-solid fa-book fa-2x"></i></a></li>
            <li><a href="./collection"><i class="fa-solid fa-box fa-2x"></i></a></li>
            <li><a href="./stats"><i class="fa-solid fa-chart-column fa-2x"></i></a></li>
            <li><a href="<?= $_COOKIE['user_id'] == 40 ? "settings_admin" : "settings" ?>" class="nav-avatar"><img class="avatar-img-nav" src="/public/images/avatar-img.png"></a></li>
        </ul>
    </nav>
</body>
</html>