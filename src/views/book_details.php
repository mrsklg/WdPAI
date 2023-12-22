<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/book_details.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Book details</title>
</head>
<body class="flex-row-center-center body-popup">
    <div class="popup flex-column-space-around-center">
        <h1>Book details</h1>
        <div class="book-details flex-column-space-around-center">
            <div class="bookcover flex-row-center-center">
                <img src=<?= $book->getCoverUrl() ?> class="cover-img" alt="">
            </div>
            <div class="flex-column-space-around-center details-container">
                <div>
                    <p>Title:</p>
                    <p id="title" class="details-text"><?= $book->getTitle() ?></p>
                </div>
                <div>
                    <p>Author:</p>
                    <p id="author" class="details-text"><?= implode(", ", $book->getAuthor()) ?></p>
                </div>
                <div>
                    <p>Pages:</p>
                    <p id="num-of-pages" class="details-text"><?= $book->getNumOfPages() ?></p>
                </div>
                <div>
                    <p>Genre:</p>
                    <p id="genre" class="details-text"><?= implode(", ", $book->getGenre()) ?></p>
                </div>
            </div>
        </div>
        <a href="./collection" class="popup-light-btn">Close</a>
    </div>
</body>
</html>