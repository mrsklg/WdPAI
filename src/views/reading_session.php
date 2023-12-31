<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/reading_session.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Reading session</title>
</head>
<body class="flex-row-center-center body-popup body-no-blur">
    <div class="popup flex-column-space-around-center">
        <h1>Reading session</h1>
        <div class="session-details flex-column-space-around-center">
            <div class="bookcover flex-row-center-center">
                <img src="https://ecsmedia.pl/cdn-cgi/image/format=webp,width=544,height=544,/c/zbrodnia-i-kara-b-iext123430833.jpg" class="cover-img" alt="">
            </div>
            <div class="flex-column-space-around-center timer-container">
                <div id="timer">
                    00:01:10
                </div>
            </div>
        </div>
        <button class="popup-light-btn">Pause</button>
        <a href="./end_reading_session" class="popup-light-btn">Stop</a>
        <a href="./current_book" class="popup-cancel-btn light">Cancel</a>
    </div>
</body>
</html>