<?php
$menuItems = [
    ['label' => 'Home', 'link' => 'index.php'],
    ['label' => 'About', 'link' => 'about.php'],
    ['label' => 'Services', 'link' => 'service.php'],
    ['label' => 'Contact', 'link' => 'contact.php'],
    ['label' => 'Registration', 'link' => 'reallogin.php'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rolex - Find The Time Of Your Life</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">

    <!-- icons link -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <link rel="stylesheet" href="fav.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        $(document).ready(function() {
            $(".heart-icon").click(function() {
                const heartIconId = $(this).attr('id');
                let insertData = 0;

                if (heartIconId === 'heartIcon1') {
                    insertData = 1;
                } else if (heartIconId === 'heartIcon2') {
                    insertData = 2;
                } else if (heartIconId === 'heartIcon3') {
                    insertData = 3;
                } else if (heartIconId === 'heartIcon4') {
                    insertData = 4;
                } else if (heartIconId === 'heartIcon5') {
                    insertData = 5;
                } else if (heartIconId === 'heartIcon6') {
                    insertData = 6;
                } else if (heartIconId === 'heartIcon7') {
                    insertData = 7;
                } else if (heartIconId === 'heartIcon8') {
                    insertData = 8;
                } else if (heartIconId === 'heartIcon9') {
                    insertData = 9;
                } else if (heartIconId === 'heartIcon10') {
                    insertData = 10;
                } else if (heartIconId === 'heartIcon11') {
                    insertData = 11;
                } else if (heartIconId === 'heartIcon12') {
                    insertData = 12;
                } else if (heartIconId === 'heartIcon13') {
                    insertData = 13;
                } else if (heartIconId === 'heartIcon14') {
                    insertData = 14;
                } else if (heartIconId === 'heartIcon15') {
                    insertData = 15;
                } else if (heartIconId === 'heartIcon16') {
                    insertData = 16;
                } else if (heartIconId === 'heartIcon17') {
                    insertData = 17;
                } else if (heartIconId === 'heartIcon18') {
                    insertData = 18;
                } else if (heartIconId === 'heartIcon19') {
                    insertData = 19;
                } else if (heartIconId === 'heartIcon20') {
                    insertData = 20;
                } else if (heartIconId === 'heartIcon21') {
                    insertData = 21;
                } else if (heartIconId === 'heartIcon22') {
                    insertData = 22;
                } else if (heartIconId === 'heartIcon23') {
                    insertData = 23;
                } else if (heartIconId === 'heartIcon24') {
                    insertData = 24;
                } else if (heartIconId === 'heartIcon25') {
                    insertData = 25;
                } else if (heartIconId === 'heartIcon26') {
                    insertData = 26;
                } else if (heartIconId === 'heartIcon27') {
                    insertData = 27;
                }

                if (insertData > 0) {
                    $.ajax({
                        url: 'insert.php',
                        type: 'post',
                        data: {
                            insert_data: insertData
                        },
                        success: function(response) {
                            alert(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        });
    </script>
</head>
<style>
    #search:hover .navbar {

        padding-bottom: 20pc;
        opacity: 0;
        transition: 2s;
    }

    form {

        z-index: -1;
        position: absolute;
    }

    #fm {
        display: block;
        z-index: 1;
        opacity: 1;
        margin-top: -10pc;
        transition: 2s;
        margin-right: 20pc;
    }

    #in input {
        display: block;
        color: white;
    }

    input {
        display: inline-block;
    }

    #sub input {
        display: block;
    }


    .autocomplete {
        position: relative;
        display: inline-block;
    }

    input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
    }

    input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
    }

    input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;

        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }


    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }

    input {
        display: none;
        display: inline-block;
    }

    #menu {
        font-family: "DM Sans", sans-serif;
        position: absolute;
        margin: 13px 8pc;
        font-size: 19px;
    }

    .toggle {
        position: absolute;
        height: 9px;
        width: 30px;
        z-index: 1;
        cursor: pointer;
        top: 38px;
        left: 110px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: 3s;
    }

    .toggle .line {
        height: 3px;
        width: 24px;
        background-color: white;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .slide {
        position: absolute;
        top: -20pc;
        left: -2pc;
        width: 0pc;
        height: 13pc;
        opacity: 0;
        padding: 50px 20px;
        overflow: hiden;
        transition: 2s;
    }

    input:checked~.slide {
        top: 0pc;
        opacity: 1;
        transition: 2s;
    }

    #search:checked~#in {
        opacity: 1;
    }

    .slide ul {
        list-style: none;
        display: inline-block;
        padding: 1pc 0pc;
        padding-left: 5pc;
        padding-right: 2952px;
        margin-top: 20px;
        background: linear-gradient(to right, rgb(0, 78, 50), rgb(6, 146, 95));
        transition: 3s;
    }

    .slide ul li {
        margin: 20px 0;
    }

    .slide ul li a {
        color: white;
        text-decoration: none;
        font-size: 1.2em;
        display: block;
    }

    .slide ul li a:hover {
        color: rgb(116, 241, 195);
    }

    input:checked~.toggle .line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
        transition: 3s;
    }

    input:checked~.toggle .line:nth-child(2) {
        opacity: 0;
        transition: 3s;
    }

    input:checked~.toggle .line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
        transition: 3s;
    }

    @media (max-width: 768px) {
        .slide {
            left: -100%;
            width: 100%;
            transition: left 0.3s ease;
        }

        input:checked~.slide {
            left: 0;
        }

        .toggle {
            left: 100px;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    #searchMenu {
        margin-top: 10px;
    }

    #searchMenu label {
        font-size: 16px;
        margin-right: 10px;
    }

    #searchMenu input {
        width: 200px;
        height: 25px;
        padding: 5px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        display: block;
    }

    #searchMenu button {
        padding: 5px 10px;
        background-color: #45DEF1;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    #searchMenu button:hover {
        background-color: #2CA9C9;
    }

    #ticketDetails {
        margin-top: 10px;
    }

    #searchMenu input {
        opacity: 1;
    }

    #myInput {
        color: white;
        background-color: #ffffff2b;
        width: 40pc;
        height: 42px;
        border-radius: 3pc;
        outline: none;
    }

    #myInput placeholder {
        color: white;
    }

    #sub {
        position: absolute;
        background-color: transparent;
        color: white;
        margin: -1px 10pc;
    }

    #search {
        transition: 4s;
    }

    .icon-list li {
        display: flex;
        align-items: center;
        margin: 0 10px;
    }

    li {
        unicode-bidi: isolate;
    }

    input[type="checkbox"] {
        opacity: 0;
    }

    .map-section iframe {
        width: 100%;
        height: 500px;
        display: inherit;
    }
</style>
<body>
    <div class="video-container">
        <header>
            <nav class="navbar fixed-top">
                <div class="logo"><span id="menu">Menu</span>
                    <img src="img/lr.png" alt="">
                </div>
                <label for="menu-toggle" class="toggle">
                    <span class="line"></span>
                    <!-- <span class="line"></span> -->
                    <span class="line"></span>
                </label>
                <input type="checkbox" id="menu-toggle">
                <div class="slide">
                    <ul>
                        <?php
                        foreach ($menuItems as $item) {
                            echo "<li><a href='{$item['link']}'>{$item['label']}</a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <form autocomplete="off" action="" id="fm" style="margin-left: 16pc;">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" type="text" name="myCountry" placeholder="Name" id="in">
                    </div>
                    <input type="submit" id="sub">
                </form>
                <ul class="icon-list">
                    <li>
                        <a href="javascript:void(0);" id="searchLink">
                            <box-icon name='search' class="icon" color="white"></box-icon><span id="search">Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="#store">
                            <svg viewBox="0 0 15 15" class="icon" height="18" width="18">
                                <path d="M7.5,0.5c-3,0-5.4,2.4-5.4,5.4c0,1.1,0.7,2.6,1.7,4c1.7,2.3,3.7,4.6,3.7,4.6s2-2.4,3.7-4.6c0.9-1.4,1.7-2.9,1.7-4
                             C12.9,2.9,10.5,0.5,7.5,0.5z M7.5,8.4C6.1,8.4,5,7.2,5,5.9c0-1.4,1.1-2.5,2.5-2.5S10,4.5,10,5.9S8.9,8.4,7.5,8.4z"></path>
                            </svg><span>Store locator</span>
                        </a>
                    </li>

                    <li>
                        <a href="fav.php">
                            <svg class="icon" height="18" width="18" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                                <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z"></path>
                            </svg><span>Favourites</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="content1">
            <h5>YOUR</h5>
            <h1>Favourites</h1>
            <p class="c1">Browse the online catalogue of watches and add your favourites <br> to your wishlist here.</p>
        </div>
        <div class="new">
            Find Your Rolex > <br>
        </div>
        <div class="new1">
            <a href="dataindex.php"> <button class="favbtn">Explore Your Beloved</button></a>
        </div>
        <div class="con">
            <h2>Watches You May Like</h2>
            <p class="w1">
                These watches have been selected for you to add to your list <br> of favourites. <br>

            </p>
        </div>

    </div>
    <div class="spacer">
        <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 10px;">
        </div>
    </div>
    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 5pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon1" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Oyster Perpetual 41</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 41 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/f1.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon2" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Explore 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, Oystersteel and Yellow Gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/f2-removebg-preview.png" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon3" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Submariner Date</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 41 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/f3.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon4" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Datejust 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 41 mm, Oystersteel and while gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/datejust36.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon5" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Submariner</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/submariner.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon6" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">GMT-Master II</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/gmtii.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon7" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Everose gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dayd40.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon8" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Cosmograph Daytona</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, white Gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/cosmo.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon9" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Oyster Prepetual 41</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 41 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/oysterpre.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon10" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Yatch-Master 42</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 42 mm, RLX titanium</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/yatch2.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon11" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Sea-Dweller</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 43 mm, Oystersteel and yello Gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/seed.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon12" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Rolex Deepsea</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 44 mm, yellow gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/roldeep.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon13" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Air-King</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Oystersteel</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/airkingm.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon14" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Explore 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, Oystersteel and yellow Gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/ex36.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon15" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Lady-Datejust</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 28 mm, Everose gold and diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/ladydate.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon16" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Sky-Dweller</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 42 mm, Everose gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/skyd.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon17" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">1908</a>
                    </h4>
                    <div class="mb-0 text-muted">39 mm, platinum, polished finish</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/1908m.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon18" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Everose gold and diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/date40.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon19" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Platinum</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon20" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, White gold and Diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon21" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, Everose gold and diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40gold.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon22" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, Platinum</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd36pl.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon23" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, yellow Gold and Diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40green.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon24" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, White gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40gold.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;">
            </div>
        </div>
    </div>

    <div class="row" style="cursor: pointer; margin-bottom: 10px; margin-top: 3pc;">
        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon25" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, platinum and Diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd36pl.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
                <!-- <div class="heart-icon" style="cursor:pointer;">❤️</div> -->
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon26" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 36</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 36 mm, Everose Gold</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd36.jpg" data-holder-rendered="true" style="width: 220px; height: 270px;">
            </div>
        </div>

        <div class="col-md-4">
            <div class="card flex-md-row box-shadow h-md-250" style="margin-bottom: 10px;">
                <div class="card-body d-flex flex-column align-items-start">
                    <svg id="heartIcon27" class="ejnvnq02 css-1g5uf91 e10fsun60 heart-icon" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="m7.5 14.8-6.2-6.2c-1.7-1.7-1.7-4.5 0-6.2.8-.8 1.9-1.3 3.1-1.3 1.2 0 2.2.5 3.1 1.3v.1c.8-.8 1.9-1.3 3.1-1.3s2.2.5 3.1 1.3c1.7 1.7 1.7 4.5 0 6.2zm-3.1-11.6c-.6 0-1.2.2-1.6.7-.9.9-.9 2.4 0 3.3l4.7 4.8 4.7-4.8c.9-.9.9-2.4 0-3.3-.8-.9-2.4-.9-3.2 0l-1.5 1.5-1.5-1.5c-.4-.5-1-.7-1.6-.7z" fill="#137e4e"></path>
                    </svg>
                    <h4 class="mt-5">
                        <a class="text-dark" href="#">Day-Date 40</a>
                    </h4>
                    <div class="mb-0 text-muted">Oyster, 40 mm, platinum and Diamonds</div>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="img/dd40goldoy.jpg" data-holder-rendered="true" style="width: 220px; height: 250px;" style="img:hover{transform:translateY(2px); transition: 0.2s all ease-in-out;}">
            </div>
        </div>
    </div>

    <div class="footer-wrapper" id="store">
        <div class="map-section">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1920&amp;height=500&amp;hl=en&amp;q=Adam Street, New York, NY 535022&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>
    <!-- HTML structure for the custom message box -->
    <!-- <div id="customMessage" class="custom-message">
        <div class="message-content">
            <span id="messageText"></span>
            <span id="closeMessage" class="close-icon">&times;</span>
        </div>
    </div>

    <script>
        var watchNames = [
            'Oyster Prepetual 41',
            'Explore 36',
            'Submariner Date'
        ];
        var heartIcons = document.querySelectorAll('.heart-icon');
        heartIcons.forEach(function(icon, index) {
            icon.addEventListener('click', function() {
                showMessage('<h4 style="color: rgb(6, 94, 68); align-items: flex-start; font-weight: 600;">Watch saved:</h4> ');
            });
        });

        function showMessage(message) {
            var messageBox = document.getElementById('customMessage');
            var messageText = document.getElementById('messageText');
            messageText.innerHTML = message + '<br><span style="margin-left: 20px;">This Watch Has Been Added</span>';
            messageBox.style.display = 'block';

            var closeIcon = document.getElementById('closeMessage');
            closeIcon.addEventListener('click', closeMessage);
        }

        function closeMessage() {
            var messageBox = document.getElementById('customMessage');
            messageBox.style.display = 'none';
        }
    </script> -->

    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal('.box, .con1, .con2, .content1, .new, .container, .container-fluid, .pi, .d1, .d2, .e1, .e2, .tc1', {
            delay: 500,
            origin: 'bottom'
        });
    </script>

    <!-- heart icon -->
    <!-- <script>
    // Get the heart icon by its ID
    var heartIcon = document.getElementById('heartIcon');

    // Add a click event listener to the heart icon
    heartIcon.addEventListener('click', function() {
        // Show an alert when the heart icon is clicked
        alert('You liked this item!');

    });
</script> -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var heartIcon = document.getElementById('heartIcon1');

            heartIcon.addEventListener('click', function() {
                // Replace with your logic to check if user is logged in
                var isLoggedIn = false; // Placeholder: change based on your login status check

                if (!isLoggedIn) {
                    alert("Please log in to like this item.");
                    window.location.href = "reallogin.php"; // Redirect to login page
                } else {
                    // Handle the logic for logged-in users
                }
            });
        });
    </script>

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".toggle").click(function() {
                $("#menu").css("color", "rgb(250, 300, 300)").html("Menu").css("transition", "2s");
            });
            $(".toggle").click(function() {
                $(".slide").css(" top", "-20pc").css("transition", "2s");
                $("#menu").css("rgb(250, 300, 300)");
            });
        });
    </script>

    <script>
        function autocomplete(inp, arr) {
            var currentFocus;
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                this.parentNode.appendChild(a);
                for (i = 0; i < arr.length; i++) {
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        b = document.createElement("DIV");
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        b.addEventListener("click", function(e) {
                            inp.value = this.getElementsByTagName("input")[0].value;
                            closeAllLists();
                            var page = pageMapping[inp.value];
                            if (page) {
                                window.location.href = page;
                            }
                        });
                        a.appendChild(b);
                    }
                }
            });
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    currentFocus++;
                    addActive(x);
                } else if (e.keyCode == 38) {
                    currentFocus--;
                    addActive(x);
                } else if (e.keyCode == 13) {
                    e.preventDefault();
                    if (currentFocus > -1) {
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                if (!x) return false;
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }

            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        var countries = ["Datejust", "Submariner", "GMT-Master II", "Daydate", "Cosmograph-Daytona", "Yatch-Master", "Sea-Dweller", "DeepSea", "Air-King", "Oyster Prepetual", "About Rolex", "Sustainable Development", "Behind The Crown", "Service and Care", "Servicing Your Rolex", "Anatomy of Rolex", "Contact of Rolex", "Favourite", "Rolex Watches"];

        var pageMapping = {
            "Datejust": "datejust.php",
            "Submariner": "submarinar.php",
            "GMT-Master II": "gmt.php",
            "Daydate": "daydate.php",
            "Cosmograph-Daytona": "cosmo.php",
            "Yatch-Master": "yatch.php",
            "Sea-Dweller": "sea.php",
            "DeepSea": "depsea.php",
            "Air-King": "air.php",
            "Oyster Prepetual": "oyster.php",
            "About Rolex": "about.php",
            "Sustainable Development": "absustain.php",
            "Behind The Crown": "abcrown.php",
            "Service and Care": "service.php",
            "Servicing Your Rolex": "serrolex.php",
            "Anatomy of Rolex": "seranatomy.php",
            "Contact of Rolex": "contact.php",
            "Favourite": "fav.php",
            "Rolex Watches": "index.php"
        };

        autocomplete(document.getElementById("myInput"), countries);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#searchLink").click(function() {

                $("#fm").css({
                    "margin-top": "8pc"
                });
                $(".navbar").css({
                    "padding-bottom": "15pc"
                }).css({
                    "transition": "3s"
                });

            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $("#sub").click(function() {
                $("#fm").delay(5000).css({
                    "margin-top": "-5pc"
                });
                $(".navbar").css({
                    "padding-bottom": "4pc"
                }).css({
                    "transition": ".2s"
                });
            });

        });
    </script>

</body>

</html>