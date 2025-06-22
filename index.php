<?php
$menuItems = [
    ['label' => 'Home', 'link' => 'index.php'],
    ['label' => 'About', 'link' => 'about.php'],
    ['label' => 'Services', 'link' => 'service.php'],
    ['label' => 'Contact', 'link' => 'contact.php'],
    ['label' => 'Registration', 'link' => 'reallogin.php']
];
// session_start();

// // Check if user is logged in
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header('Location: reallogin.php');
//     exit;
// }
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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="app.js"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            box-sizing: border-box;
        }

        #search:hover .navbar {
            /* left: 0; */
            /* top: -10pc; */
            padding-bottom: 20pc;
            opacity: 0;
            transition: 2s;
        }

        form {
            /* border: 2px solid red; */
            margin: 10pc 20pc;
            z-index: -1;
            position: absolute;
        }

        #fm {
            display: block;
            z-index: 1;
            opacity: 1;
            margin-top: -9pc;
            transition: 2s;
        }

        #in input {
            display: block;
            color: white;
        }

        #sub input {
            display: block;
        }

        /*the container must be positioned relative:*/
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
            /*position the autocomplete items to be the same width as the container:*/
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

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "DM Sans", sans-serif;
        }

        body {
            background-color: aliceblue;
        }

        .video-container {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        #myVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        header {
            position: absolute;
            top: 0;
            width: 100%;
            transition: height 4s ease;
            z-index: 1;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px;
            /* background-color: rgba(0, 0, 0, 0.5); */
            background: linear-gradient(90deg, #0b3e27, #197149);
            /* background: linear-gradient(to right , rgb(0, 78, 50),rgb(6, 146, 95)); */
            height: 90px;
            transition: height 4s ease;
        }

        .navbar .logo {
            font-size: 1.5em;
            color: white;
        }

        .logo img {
            height: 45px;
            width: 45px;
            margin-left: 45pc;
        }

        .navbar .lg img {
            width: 50px;
        }

        input {
            display: none;
            display: inline-block;
        }

        input[type=checkbox] {
            opacity: 0;
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
            /* left: 0; */
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

        .box {
            margin-left: 140px;
            margin-right: 180px;
            border-radius: 20px;
            margin-bottom: 30px;
        }

        html {
            scroll-behavior: smooth;
        }

        .text-center {
            margin-top: 6pc;
            font-size: 45px;
            color: rgb(1, 87, 55);
            font-family: Arial, Helvetica, sans-serif;
        }

        .p1 {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: grey;
            margin-left: 45pc;
            margin-top: 20px;
        }

        .p1 .fi {
            margin-top: 34px;
            color: rgb(1, 87, 55);
            cursor: pointer;
        }

        .p1 .fi:hover {
            color: black;
        }

        .box1 {
            background: url('img/datejust.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .con1 .h2 {
            margin-left: 7pc;
            font-weight: 700;
            color: white;
            font-size: 50px;
            cursor: pointer;
        }

        .con1 .pb {
            margin-left: 7pc;
            cursor: pointer;
            font-size: 20px;
            color: white;
        }

        .con1 a {
            text-decoration: none;
            color: white;
            margin-left: 7pc;
            font-size: 20px;
        }

        .con1 a:hover {
            color: grey;
        }

        .con1 {
            margin-bottom: 160px;
        }


        .box2 {
            background: url('img/submari.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .con2 .h2 {
            margin-left: 7pc;
            font-weight: 700;
            color: black;
            font-size: 50px;
            cursor: pointer;
        }

        .con2 .pb1 {
            margin-left: 7pc;
            cursor: pointer;
            font-size: 20px;
            color: black;
        }

        .con2 a {
            text-decoration: none;
            color: black;
            margin-left: 7pc;
            font-size: 20px;
        }

        .con2 a:hover {
            color: grey;
        }

        .con2 {
            margin-bottom: 160px;
        }

        .box3 {
            background: url('img/gmt2.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box4 {
            background: url('img/dddd.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box5 {
            background: url('img/cc.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box6 {
            background: url('img/oyster.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box7 {
            background: url('img/yatch.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box8 {
            background: url('img/deepsa.jpg.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box9 {
            background: url('img/dweller.jpd.avif') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .box10 {
            background: url('img/aair.jpg') no-repeat center center/cover;
            height: 750px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .content1 {
            text-align: center;
        }

        .content1 h1 {
            font-size: 90px;
            color: white;
            font-weight: 700;
        }

        .content1 h3 {
            margin-top: 200px;
            font-variant: small-caps;
            color: white;
            font-size: xx-large;
            letter-spacing: 0.2em;
            unicode-bidi: isolate;
        }

        .new {
            margin-top: 14pc;
            text-align: center;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }

        .new:hover {
            color: grey;
        }

        /* icons */
        .icon {
            fill: white;
            margin-top: 10px;
            flex-direction: row;
            display: inline;
            margin-right: 8px;
        }

        .box-icon {
            fill: white;
        }


        .icon-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .icon-list li {
            display: flex;
            align-items: center;
            margin: 0 10px;
            /* Adjust the margin as needed */
        }

        .icon-list a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            /* color: inherit; */
        }

        .icon-list a:hover {
            color: rgb(116, 241, 195);
        }


        /* footer */

        #my {
            height: 50%;
            width: 50%;
            margin: 18pc 20pc;
            /* filter: blur(px); */
        }

        /* .container {
            margin-top: 12.8pc;
          
        } */

        .container-fluid {
            background-color: black;
        }

        .p {
            background-color: black;
            /* border: 2px solid red; */
            padding: 3pc 11pc;
            position: absolute;
            margin: 40pc 58pc;


        }

        .l1 img {
            position: absolute;
            /* display: inline; */
            /* border: 2px solid red; */
            /* color: white; */
            height: 2pc;
            width: 2pc;
            /* border-radius: 6pc; */
            margin: 23pc 37pc;
            /* background: transparent; */

        }

        #ph {
            opacity: 0;
            position: absolute;
            /* margin-bottom: 40pc; */
            height: 48pc;
            width: 60.8pc;
            object-fit: cover;
            margin: 4pc 0pc;
            /* transition: .3s; */
        }

        .container:hover #ph {
            opacity: 0.4;
            transition: 12s ease-in-out;
            transform: scale(1.7);

        }

        .l1 img {
            opacity: 0;
        }

        .container:hover .l1 img {
            opacity: 1;
            transition: 0.9s;
        }

        .next {
            z-index: -1;
            background-color: transparent;
            /* border: 5px solid green; */
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .boxx {
            /* border: 2px solid red; */
            width: 19pc;
            color: white;
            font-family: sans-serif;
            margin-inline: 3pc;
            /* padding: 1pc -3pc; */

            /* margin-inline-start: 1pc; */
            /* margin-left: 0pc; */
            text-align: start;
        }

        p {
            color: rgba(255, 255, 255, 0.861);
            letter-spacing: 1px;
        }

        h2 {
            line-height: 0pc;
        }

        #b img {
            height: 2pc;
            width: 2pc;
        }

        #b {
            margin-top: -39pc;
            color: rgb(0, 187, 0);
            font-family: cursive sans-serif;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            flex-direction: column;
            letter-spacing: 2px;
            font-size: x-large;
            font-weight: 600;
        }

        #b3 {
            margin-top: -6pc;
        }

        .l1:hover img.main {
            opacity: 1;
            position: absolute;
            cursor: pointer;
        }

        .l1:hover img.hov {
            opacity: 0;
            position: relative;
            cursor: pointer;
        }

        .l1 img.main {
            opacity: 0;
            position: absolute;
        }

        .l1 img.hov {
            position: absolute;
            opacity: 0;
        }



        .box11 {
            background: url('img/footerimg.jpeg') no-repeat center center/cover;
            height: 500px;
            position: relative;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .con11 .h3 {
            margin-left: 7pc;
            font-weight: 700;
            color: white;
            font-size: 50px;
            cursor: pointer;
        }

        .con11 a {
            text-decoration: none;
            color: white;
            margin-left: 7pc;
            font-size: 20px;
        }

        .con11 a:hover {
            color: grey;
        }


        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid black;
            width: 80%;
            max-width: 600px;
            border-radius: 4px;
        }

        .modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
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
            margin: -5px 15pc;
        }

        #search {
            transition: 0.2s;
        }

        .map-section iframe {
            width: 100%;
            height: 500px;
            display: inherit;
        }

        .bx {
            font-size: 23px;
            margin: 5px;
            color: #fff;
            margin-top: 16px;
        }

        .bx:hover {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="img/rolex-watches-collection-hub-cover-autoplay.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
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
                <ul class="icon-list">
                    <li>
                        <a href="javascript:void(0);" id="searchLink">
                            <box-icon name='search' class="icon" color="white"></box-icon><span id="search">Search</span>
                        </a>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <div id="searchMenu">
                                    <label for="trainIdInput">Enter Search ID:</label>
                                    <input type="text" id="trainIdInput" placeholder="Enter Search ID">
                                    <button id="submitSearch">Submit</button>
                                    <div id="ticketDetails"></div>
                                </div>
                            </div>
                        </div>
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

                    <li>
                        <a href="fetch2.php">
                            <i class='bx bx-user-circle' height="20" width="20"></i> <span>Admin</span>
                        </a>
                    </li>
                </ul>

                <form autocomplete="off" action="" id="fm">
                    <div class="autocomplete" style="width:300px;">
                        <input id="myInput" type="text" name="myCountry" placeholder="Name" id="in">
                    </div>
                    <input type="submit" id="sub">
                </form>
            </nav>

        </header>




        <div class="content1">
            <h3>the collection</h3>
            <h1>Rolex watches</h1>
        </div>
        <div class="new">
            New Watches 2024 >
        </div>
    </div>
    <div class="box" style="height: auto;">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Explore the Rolex <br>Collection</h1>
            </div>
            <div class="p1">
                The Rolex collection offers a wide range of prestigious, <br>high-precision timepieces, from Professional to Classic models to suit any wrist.
                <div class="fi">
                    Find Your Rolex >
                </div>
            </div>
        </div>
    </div>

    <div class="box1">
        <div class="con1">
            <h2 class="h2">Datejust</h2>
            <div class="ml-auto">
                <p class="pb">A Watch For The Dates To Remember</p>
                <a href="datejust.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box2">
        <div class="con2">
            <h2 class="h2">Submariner</h2>
            <div class="ml-auto">
                <p class="pb1">The Supreme Diver's Watch</p>
                <a href="submarinar.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box3">
        <div class="con1">
            <h2 class="h2">GMT-Master II</h2>
            <div class="ml-auto">
                <p class="pb">Two Time-Zones, Two-Colors, Uniquely Iconic</p>
                <a href="gmt.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box4">
        <div class="con2">
            <h2 class="h2">Day-Date</h2>
            <div class="ml-auto">
                <p class="pb1">A Witness To Some Of History's Most Pivotal Moments</p>
                <a href="daydate.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box5">
        <div class="con1">
            <h2 class="h2" style="color: black;">Cosmograph Daytona</h2>
            <div class="ml-auto">
                <p class="pb" style="color: black;">The Chronograph That Made A Watch An Icon</p>
                <a href="cosmo.php" class="dislink" style="color: black;">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box6">
        <div class="con1">
            <h2 class="h2">Oyster Perpetual</h2>
            <div class="ml-auto">
                <p class="pb">Quintessentailly Rolex</p>
                <a href="oyster.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box7">
        <div class="con2">
            <h2 class="h2">Yacht-Master</h2>
            <div class="ml-auto">
                <p class="pb1">To Keep Your Heading, No Matters The Circumstances</p>
                <a href="yatch.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box9">
        <div class="con1">
            <h2 class="h2">Sea-Dweller</h2>
            <div class="ml-auto">
                <p class="pb">Citizen of The Deep</p>
                <a href="sea.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box8">
        <div class="con1">
            <h2 class="h2">Deepsea</h2>
            <div class="ml-auto">
                <p class="pb">Extream Diver's watches</p>
                <a href="depsea.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>

    <div class="box10">
        <div class="con1">
            <h2 class="h2">Air-King</h2>
            <div class="ml-auto">
                <p class="pb">An Ever-improved Homage To The Pioneers Of The Skies</p>
                <a href="air.php" class="dislink">Discover Me ></a>
            </div>
        </div>
    </div>
    <div class="spacer" style="background-color: black;">
        <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 205px;">
        </div>
    </div>


    <!-- footer -->
    <div class="container-fluid">
        <div class="container">
            <video autoplay loop muted id="ph" class="pic">
                <source src="img/classic-watches-oyster-perpetual-1908-bold-origins_2023_november_expression_of_refinement.webm" type="video/mp4">
            </video>
            <div class="l1" id="a">
                <img src="img/insh.png" alt="" class="main">
                <img src="img/instagram (1).png" alt="" class="hov">
            </div>

            <div class="l1" id="bc">
                <img src="img/3app.png" alt="" class="main">
                <img src="img/4app.png" alt="" class="hov">
            </div>

            <div class="l1" id="c">
                <img src="img/twitter (2).png" alt="" class="main" style="margin-top: 23.2pc;">
                <img src="img/twitter.png" alt="" class="hov">
            </div>

            <div class="l1" id="d">
                <img src="img/telegram (1)0.png" alt="" class="main">
                <img src="img/telegram.png" alt="" class="hov">
            </div>


            <div class="l1" id="e">
                <img src="img/chrome (1).png" alt="" class="main">
                <img src="img/chrome.png" alt="" class="hov">
            </div>

            <video autoplay muted id="my">
                <source src="img/VID_20240627_183557_974.mp4" type="video/mp4">
            </video>

        </div>
        <div class="next">
            <div class="boxx" id="b">
                <img src="img/lr.png" alt="">
                ROLEX
            </div>
            <div class="boxx" id="b1">
                <h2>Rolex watches</h2><br><br>
                <p>New watches 2024</p>
                <p>Find your Rolex</p>
                <p>Configure your Rolex</p>
                <p>Men's Watches</p>
                <p>Women's Watches</p>
                <p>Gold Watches</p> <br>
                <h2>Rolex collections</h2><br>
                <p>Air-King</p>
                <p>Cosmograph Daytona</p>
                <p>Datejust</p>
                <p>Day-Date</p>
                <p>Explorer</p>
                <p>GMT-Master II</p>
                <p>Oyster Perpetual</p>
                <p>Sea-Dweller</p>
                <p>Deepsea</p>
                <p>Sky-Dweller</p>
                <p>Submariner</p>
            </div>

            <div class="boxx" id="b2">
                <h2>Rolex and sport</h2><br><br>
                <p>Tennis</p>
                <p>Golf</p>
                <p>Sailing</p>
                <p> Motor Sport</p>
                <p>Horse Riding</p><br>
                <h2>About Rolex</h2><br>
                <p>Sustainable Development </p>
                <p> Behind the Crown</p>
                <p> History</p><br><br>
                <h2>Buying a Rolex</h2><br>
                <p>Store Locator</p>
                <p>Buying a Rolex</p>
                <p>Rolex Certified Pre-Owned</p><br><br>
                <h2>Care</h2><br>
                <p>Service Center Locator</p>
                <p>Watch Care & Service</p>
            </div>

            <div class="boxx" id="b3">
                <h2>Services</h2><br><br>
                <p>frequently Asked question</p>
                <p> Your Favorite</p>
                <p>file a report</p>
                <p>Newsroom</p><br>
                <h2>Media</h2><br>
                <p>Wallpaper </p>
                <p>Brochures</p>
                <p>User Guide</p><br><br>
                <h2>Official channel</h2><br>
                <p>Facebook</p>
                <p>Instagram</p>
                <p>X</p>
                <p>Youtube</p>
                <p>Pinterest</p>

            </div>
            <!-- <br style="background-color: black; height: 3pc;"> -->
            <!-- <br id="br"><br><br> -->
        </div>
    </div>

    <div class="box11">
        <div class="con11">
            <h2 class="h3" style="text-align: center;">Discover Our Prepetual Initiatives</h2>
            <div class="ml-auto" style="text-align: center;">
                <a href="https://www.rolex.org/" target="_blank" rel="noopener noreferrer" aria-label="open in new tab" class="text reverseIcon css-19az226 eob9b3y0">Visit Rolex.org <svg class="undefined rtl css-1emgvlg e10fsun60" height="15" width="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" alt="">
                        <path d="M0.1,0.1v14.8h14.8V9h-2v3.7v0.2V13h-0.1h-0.2H2.3H2.1H2v-0.1v-0.2V2.4V2.2V2.1h0.1h0.2H6v-2H0.1z M8.7,0.1v2h2.1h0.5h0.3l-0.2,0.2L11,2.6L5.8,7.8l1.4,1.4L12.4,4l0.4-0.4l0.2-0.2v0.3v0.5v2.1h2V0.1H8.7z"></path>
                    </svg></a>

                <div class="spacer">
                    <div class="rrmc-content-spacer" data-desktop="50" data-tablet="50" data-mobile="50" data-unique-id="655612719" style="height: 156px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrapper" id="store">
        <div class="map-section">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1920&amp;height=500&amp;hl=en&amp;q=Adam Street, New York, NY 535022&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".container").hover(function() {

                $("#a").css("margin", "-22pc -20pc").css("position", "absolute").css("transition", "1s").css("opacity", "1");
                $("#bc").css("margin", "-22pc -10pc").css("position", "absolute").css("transition", "2s");
                $("#c").css("margin", "-22pc 2pc").css("position", "absolute").css("transition", "3s");
                $("#d").css("margin", "-22pc 12pc").css("position", "absolute").css("transition", "4s");
                $("#e").css("margin", "-22pc 22pc").css("position", "absolute").css("transition", "5s");
                // $("#ph").css("opacity", "1").css("margin", "-100pc -1pc").css("position", "absolute").css("transition", "4s ease-out");
            });

            $(".container").hover(function() {
                $(".next").css("margin-top", "-40pc").delay(5000).css("transition", "6s");

            });
        });
    </script>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 300
        });
        ScrollReveal().reveal('.box, .con1, .con2, .content1', {
            delay: 500,
            origin: 'bottom'
        });
    </script>

    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // $(".toggle").click(function() {
            //     $("#menu").css("color", "rgb(250, 300, 300)").html("Menu").css("transition", "2s");
            // });
            // $(".toggle").click(function() {
            //     $(".slide").css(" top", "-20pc").css("transition", "2s");
            //     $("#menu").css("rgb(250, 300, 300)");
            // });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const favoriteButtons = document.querySelectorAll('.favorite-button');
            const favoritesContainer = document.getElementById('favorites');

            favoriteButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const box = event.target.closest('.box1');
                    const model = box.dataset.model;
                    toggleFavorite(model, button);
                });
            });

            function toggleFavorite(model, button) {
                const icon = button.querySelector('box-icon');
                const isFavorited = icon.getAttribute('color') === 'red';
                if (isFavorited) {
                    removeFavorite(model);
                    icon.setAttribute('color', 'white');
                } else {
                    addFavorite(model);
                    icon.setAttribute('color', 'red');
                }
            }

            function addFavorite(model) {
                const favoriteItem = document.createElement('div');
                favoriteItem.className = 'favorite-item';
                favoriteItem.innerHTML = `
            <p>${model}</p>
            <button class="remove-favorite-button">Remove</button>
        `;
                favoriteItem.querySelector('.remove-favorite-button').addEventListener('click', () => {
                    favoriteItem.remove();
                    const originalButton = document.querySelector(`.box1[data-model="${model}"] .favorite-button box-icon`);
                    if (originalButton) {
                        originalButton.setAttribute('color', 'white');
                    }
                });
                favoritesContainer.appendChild(favoriteItem);
            }

            function removeFavorite(model) {
                const favoriteItem = Array.from(favoritesContainer.children).find(item => item.querySelector('p').textContent === model);
                if (favoriteItem) {
                    favoriteItem.remove();
                }
            }
        });
    </script>


    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var modal = $('#myModal');
            var span = $('.close');

            $('#searchLink').click(function(e) {
                e.preventDefault();
                modal.show();
                $('#trainIdInput').focus();
            });

            span.click(function() {
                modal.hide();
            });

            $(window).click(function(event) {
                if (event.target.id === 'myModal') {
                    modal.hide();
                }
            });

            $('#submitSearch').click(function() {
                var searchId = $('#trainIdInput').val().trim();

                if (searchId === "") {
                    alert('Please enter a Search ID.');
                    return;
                }

                $.ajax({
                    url: 'search.xml',
                    dataType: 'xml',
                    success: function(data) {
                        var searchesFound = false;
                        var result = "";

                        $(data).find('search').each(function() {
                            var searchID = $(this).find('id').text();
                            if (searchID === searchId) {
                                searchesFound = true;
                                var name = $(this).find('name').text();
                                var price = $(this).find('price').text();
                                result += 'Name: ' + name + ', Price: ' + price + '\n';
                            }
                        });

                        if (!searchesFound) {
                            alert('No searches found for the specified ID.');
                        } else {
                            alert(result);
                        }
                    },
                    error: function() {
                        alert('Error fetching data.');
                    }
                });

                modal.hide();
            });
        });
    </script> -->


    <!-- <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var modal = $('#myModal');
            var span = $('.close');

            $('#searchLink').click(function() {
                modal.show();
                $('#trainIdInput').focus();
            });

            span.click(function() {
                modal.hide();
            });

            $(window).click(function(event) {
                if (event.target.id === 'myModal') {
                    modal.hide();
                }
            });

            $('#submitSearch').click(function() {
                var searchId = $('#trainIdInput').val().trim();

                if (searchId === "") {
                    alert('Please enter a Search ID.');
                    return;
                }

                $.ajax({
                    url: 'search.xml',
                    dataType: 'xml',
                    success: function(data) {
                        var searchesFound = false;
                        $('#ticketDetails').empty();

                        $(data).find('search').each(function() {
                            var searchID = $(this).find('id').text();
                            if (searchID === searchId) {
                                searchesFound = true;
                                var name = $(this).find('name').text();
                                var price = $(this).find('price').text();
                                var link = $(this).find('link').text();

                                // Append content with black color
                                $('#ticketDetails').append('<p style="color: black;">Name: ' + name + ', Price: ' + price + '</p>');
                                $('#ticketDetails').append('<a href="' + link + '" style="color: black;">View Details</a>');
                            }
                        });

                        if (!searchesFound) {
                            $('#ticketDetails').append('<p style="color: black;">No searches found for the specified ID.</p>');
                        }
                    },
                    error: function() {
                        alert('Error fetching data.');
                    }
                });
            });
        });
    </script> -->




    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>


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
                    "margin-top": "24pc"
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