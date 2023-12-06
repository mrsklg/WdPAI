<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
</head>

<body class="flex-row-center-center body-nav">
    <main class="flex-column-space-around-center dashboard-main">
        <div class="tile-container flex-column-space-around-center">
            <h1>Are you in for a new adventure?</h1>
            <a href="./current_book">
                <div class="dashboard-tile">
                    <img src="https://images.pexels.com/photos/6373289/pexels-photo-6373289.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    <h2>Currently, you are not reading any book</h2>
                </div>
            </a>
            <a href="./add_book">
                <div class="dashboard-tile">
                    <img src="https://images.pexels.com/photos/2203051/pexels-photo-2203051.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    <h2>Add book</h2>
                </div>
            </a>
            <a href="./collection">
                <div class="dashboard-tile">
                    <img src="https://images.pexels.com/photos/2128249/pexels-photo-2128249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                    <h2>See all your books</h2>
                </div> 
            </a>                      
        </div>
    </main>
    <nav class="flex-row-center-center navbar">
        <ul class="flex-row-center-center nav-list">
            <li><a href="./dashboard"><i class="fa-solid fa-house fa-2x"></i></a></li>
            <li><a href="./current_book"><i class="fa-solid fa-book fa-2x"></i></a></li>
            <li><a href="./collection"><i class="fa-solid fa-box fa-2x"></i></a></li>
            <li><a href="./stats"><i class="fa-solid fa-chart-column fa-2x"></i></a></li>
            <li><a class="nav-avatar">av</a></li>
        </ul>
    </nav>
</body>

</html>