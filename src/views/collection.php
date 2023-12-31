<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/collection.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Book collection</title>
</head>
<body class="flex-row-center-center body-nav">
    <main class="flex-column-space-around-center">
        <h1>Your book collection</h1>
        <div class="book-list flex-row-center-center">
            <?php foreach($books as $book): ?>
                <div class="collection-tile">
                    <a href="./book_details?title=<?= $book->getTitle() ?>">
                        <img src=<?= $book->getCoverUrl() ?> >
                    </a>
                </div>
            <?php endforeach; ?>
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