<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Karla:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/global.css">
    <link rel="stylesheet" href="/public/css/add_book.css">
    <script src="https://kit.fontawesome.com/0d4592f9a9.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="flex-row-center-center body-popup">
    <div class="popup">
        <!-- TODO: dodaj obsługę formularza -->
        <form id="bookForm" class="flex-column-space-around-center" ENCTYPE="multipart/form-data">
            <div class="file-input">
                <input type="file" id="file" class="file">
                <label for="file" class="flex-column-space-around-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                        <path d="M21.875 10.1562H14.8438V3.125C14.8438 2.26221 14.144 1.5625 13.2812 1.5625H11.7188C10.856 1.5625 10.1562 2.26221 10.1562 3.125V10.1562H3.125C2.26221 10.1562 1.5625 10.856 1.5625 11.7188V13.2812C1.5625 14.144 2.26221 14.8438 3.125 14.8438H10.1562V21.875C10.1562 22.7378 10.856 23.4375 11.7188 23.4375H13.2812C14.144 23.4375 14.8438 22.7378 14.8438 21.875V14.8438H21.875C22.7378 14.8438 23.4375 14.144 23.4375 13.2812V11.7188C23.4375 10.856 22.7378 10.1562 21.875 10.1562Z" fill="#676767"/>
                    </svg>
                    <p>Add cover</p>
                </label>
            </div>
        
            <input type="text" id="title"  placeholder="Add title">
        
            <input type="text" id="author"  placeholder="Add author">
        
            <input type="number" id="pages"  placeholder="Number of pages">
        
            <input type="text" id="genre"  placeholder="Genre">
        
            <div class="checkbox-section flex-row-center-center">
                <label class="checkbox-container flex-row-center-center">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    To Read
                </label>
                
                <label class="checkbox-container flex-row-center-center">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    Already Read
                </label>
            </div>
        
            <button type="submit" class="popup-light-btn">Save Book</button>
            <a href="./dashboard" class="popup-cancel-btn">Cancel</a>
        </form>
    </div>
</body>
</html>