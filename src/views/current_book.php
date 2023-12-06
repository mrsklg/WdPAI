<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/current_book.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Current book</title>
</head>
<body class="flex-row-center-center body-nav">
    <main class="flex-column-space-around-center main-grid">
        <h1>You are currently reading: Zbrodnia i kara</h1>
        <div class="book-info-container flex-row-center-center">
            <div class="bookcover flex-row-center-center">
                <img src="https://ecsmedia.pl/cdn-cgi/image/format=webp,width=544,height=544,/c/zbrodnia-i-kara-b-iext123430833.jpg" class="cover-img" alt="">
            </div>
            <div class="reading-progess flex-column-space-around-center">
                <h3>Your reading progress</h3>
                <div class="bar">
                    <div class="progress-bar"></div>
                </div>
                <div class="progress-data flex-row-center-center">
                    <p>50%</p>
                    <p>200/400</p>
                </div>
                <a href="./reading_session" class="small-btn">Continue reading</a>
            </div>
        </div>
        <div class="reading-summary flex-column-space-around-center">
            <p>Your reading time:  <span>10h</span></p>
            <p>Your reading speed:  <span>1 page/min</span></p>
            <p>Number of reading sessions: <span>5</span></p>
            <p>Reading the same you’ll finish in:  <span>10h</span></p>
        </div>
        <div class="history flex-column-space-around-center">
            <h4>History of reading sessions:</h4>
            <div class="session-info flex-column-space-around-center">
                <div class="flex-column-space-around-center session-details">
                    <p>22.10.2023</p>
                    <p>10:50 - 11:00</p>
                </div>
                <div class="flex-column-space-around-center session-details">
                    <p class="dark">10 minutes</p>
                    <p class="dark">10 pages</p>
                </div>
            </div>
            <div class="session-info flex-column-space-around-center">
                <div class="flex-column-space-around-center session-details">
                    <p>22.10.2023</p>
                    <p>10:50 - 11:00</p>
                </div>
                <div class="flex-column-space-around-center session-details">
                <p class="dark">10 minutes</p>
                    <p class="dark">10 pages</p>
                </div>
            </div>
            <button class="small-btn">See history</button>
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