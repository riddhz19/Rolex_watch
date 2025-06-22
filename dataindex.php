<?php
include_once "include/config.php";
if (!isset($connection)) {
    die("Database connection is not initialized.");
}
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql_query = "SELECT * FROM `getinsert` WHERE 1";
$result = mysqli_query($connection, $sql_query);
if (!$result) {
    die("Query Failed: " . mysqli_error($connection));
}

$sno = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Rolex- Find The Time Of Your Life</title>
    <style>
        .heart-icon {
            cursor: pointer;
            color: red;
        }

        body {
            background: linear-gradient(to left, rgb(6 33 52 / 1), rgb(2 10 16 / 1));
            /* background: url('img/4852650.jpg') no-repeat center center/cover; */
            height: 120%;
            color: white;
        }

        .container h2 {
            background: linear-gradient(90deg,
                    rgb(48, 144, 152),
                    rgb(180, 234, 248) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        table {
            backdrop-filter: blur(8px);
            box-shadow: 0px 10px 15px rgb(10, 10, 10);
            padding-left: 3pc;
            padding-right: 3pc;
            padding-top: 3pc;
            padding-bottom: 4pc;
            border-radius: 6px;
            margin: 20px auto;
            /* max-width: 1400px; */
            background-color: transparent;
        }

        .table tbody tr:nth-child(odd) {
            background-color: transparent;
            backdrop-filter: blur(4px);
        }

        .button {
            --background: #26493b;
            --background-hover: #213b35;
            --text: #fff;
            --shadow: rgba(0, 9, 61, 0.2);
            --paper: #5c86ff;
            --paper-lines: #fff;
            --trash: #e1e6f9;
            --trash-lines: #bbc1e1;
            --check: #fff;
            --check-background: #5c86ff;
            position: relative;
            border: none;
            outline: none;
            background: none;
            padding: 10px 24px;
            border-radius: 7px;
            min-width: 142px;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
            cursor: pointer;
            display: flex;
            color: var(--text);
            background: var(--btn, var(--background));
            box-shadow: 0 var(--shadow-y, 4px) var(--shadow-blur, 8px) var(--shadow);
            transform: scale(var(--scale, 1));
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
            margin-top: 30px;
            margin-left: 30px;
            justify-content: center;
            align-items: center;
        }

        .button span {
            display: block;
            font-size: 14px;
            line-height: 25px;
            font-weight: 600;
            opacity: var(--span-opacity, 1);
            transform: translateX(var(--span-x, 0)) translateZ(0);
            transition: transform 0.4s ease var(--span-delay, 0.2s),
                opacity 0.3s ease var(--span-delay, 0.2s);
        }

        .button .trash {
            display: block;
            position: relative;
            left: -8px;
            transform: translate(var(--trash-x, 0), var(--trash-y, 1px)) translateZ(0) scale(var(--trash-scale, 0.64));
            transition: transform 0.5s;
        }

        .button .trash:before,
        .button .trash:after {
            content: "";
            position: absolute;
            height: 8px;
            width: 2px;
            border-radius: 1px;
            background: var(--icon, var(--trash));
            bottom: 100%;
            transform-origin: 50% 6px;
            transform: translate(var(--x, 3px), 2px) scaleY(var(--sy, 0.7)) rotate(var(--r, 0deg));
            transition: transform 0.4s, background 0.3s;
        }

        .button .trash:before {
            left: 1px;
        }

        .button .trash:after {
            right: 1px;
            --x: -3px;
        }

        .button .trash .top {
            position: absolute;
            overflow: hidden;
            left: -4px;
            right: -4px;
            bottom: 100%;
            height: 40px;
            z-index: 1;
            transform: translateY(2px);
        }

        .button .trash .top:before,
        .button .trash .top:after {
            content: "";
            position: absolute;
            border-radius: 1px;
            background: var(--icon, var(--trash));
            width: var(--w, 12px);
            height: var(--h, 2px);
            left: var(--l, 8px);
            bottom: var(--b, 5px);
            transition: background 0.3s, transform 0.4s;
        }

        .button .trash .top:after {
            --w: 28px;
            --h: 2px;
            --l: 0;
            --b: 0;
            transform: scaleX(var(--trash-line-scale, 1));
        }

        .button .trash .top .paper {
            width: 14px;
            height: 18px;
            background: var(--paper);
            left: 7px;
            bottom: 0;
            border-radius: 1px;
            position: absolute;
            transform: translateY(-16px);
            opacity: 0;
        }

        .button .trash .top .paper:before,
        .button .trash .top .paper:after {
            content: "";
            width: var(--w, 10px);
            height: 2px;
            border-radius: 1px;
            position: absolute;
            left: 2px;
            top: var(--t, 2px);
            background: var(--paper-lines);
            transform: scaleY(0.7);
            box-shadow: 0 9px 0 var(--paper-lines);
        }

        .button .trash .top .paper:after {
            --t: 5px;
            --w: 7px;
        }

        .button .trash .box {
            width: 20px;
            height: 25px;
            border: 2px solid var(--icon, var(--trash));
            border-radius: 1px 1px 4px 4px;
            position: relative;
            overflow: hidden;
            z-index: 2;
            transition: border-color 0.3s;
        }

        .button .trash .box:before,
        .button .trash .box:after {
            content: "";
            position: absolute;
            width: 4px;
            height: var(--h, 20px);
            top: 0;
            left: var(--l, 50%);
            background: var(--b, var(--trash-lines));
        }

        .button .trash .box:before {
            border-radius: 2px;
            margin-left: -2px;
            transform: translateX(-3px) scale(0.6);
            box-shadow: 10px 0 0 var(--trash-lines);
            opacity: var(--trash-lines-opacity, 1);
            transition: transform 0.4s, opacity 0.4s;
        }

        .button .trash .box:after {
            --h: 16px;
            --b: var(--paper);
            --l: 1px;
            transform: translate(-0.5px, -16px) scaleX(0.5);
            box-shadow: 7px 0 0 var(--paper), 14px 0 0 var(--paper),
                21px 0 0 var(--paper);
        }

        .button .trash .check {
            padding: 4px 3px;
            border-radius: 50%;
            background: var(--check-background);
            position: absolute;
            left: 2px;
            top: 24px;
            opacity: var(--check-opacity, 0);
            transform: translateY(var(--check-y, 0)) scale(var(--check-scale, 0.2));
            transition: transform var(--check-duration, 0.2s) ease var(--check-delay, 0s),
                opacity var(--check-duration-opacity, 0.2s) ease var(--check-delay, 0s);
        }

        .button .trash .check svg {
            width: 8px;
            height: 6px;
            display: block;
            fill: none;
            stroke-width: 1.5;
            stroke-dasharray: 9px;
            stroke-dashoffset: var(--check-offset, 9px);
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke: var(--check);
            transition: stroke-dashoffset 0.4s ease var(--checkmark-delay, 0.4s);
        }

        .button.delete {
            --span-opacity: 0;
            --span-x: 16px;
            --span-delay: 0s;
            --trash-x: 46px;
            --trash-y: 2px;
            --trash-scale: 1;
            --trash-lines-opacity: 0;
            --trash-line-scale: 0;
            --icon: #fff;
            --check-offset: 0;
            --check-opacity: 1;
            --check-scale: 1;
            --check-y: 16px;
            --check-delay: 1.7s;
            --checkmark-delay: 2.1s;
            --check-duration: 0.50s;
            --check-duration-opacity: 0.3s;
        }

        .button.delete .trash:before,
        .button.delete .trash:after {
            --sy: 1;
            --x: 0;
        }

        .button.delete .trash:before {
            --r: 40deg;
        }

        .button.delete .trash:after {
            --r: -40deg;
        }

        .button.delete .trash .top .paper {
            animation: paper 1.5s linear forwards 0.5s;
        }

        .button.delete .trash .box:after {
            animation: cut 1.5s linear forwards 0.3s;
        }

        .button.delete,
        .button:hover {
            --btn: var(--background-hover);
            --shadow-y: 5px;
            --shadow-blur: 9px;
        }

        .button:active {
            --shadow-y: 2px;
            --shadow-blur: 5px;
            --scale: 0.94;
        }

        @keyframes paper {

            10%,
            100% {
                opacity: 1;
            }

            20% {
                transform: translateY(-16px);
            }

            40% {
                transform: translateY(0);
            }

            70%,
            100% {
                transform: translateY(24px);
            }
        }

        @keyframes cut {

            0%,
            40% {
                transform: translate(-0.5px, -16px) scaleX(0.5);
            }

            100% {
                transform: translate(-0.5px, 24px) scaleX(0.5);
            }
        }

        html {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        * {
            box-sizing: inherit;
        }

        *:before,
        *:after {
            box-sizing: inherit;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mb-6" style="margin-bottom: 20px; margin-top: 15px;">
            <h2 class="border-bottom text-light">YOUR PREPETUAL BELOVED</h2>
        </div>
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 mb-3">
                <a class="btn btn-info btn-sm" href="fav.php">BACK</a>
            </div>
        </div>
        <table class="table table-striped table-bordered" style="padding-left: 3pc;
            padding-right: 3pc;
            padding-top: 3pc;
            padding-bottom: 4pc;">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($sno) ?></th>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['price']) ?></td>
                        <td><img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>" style="width:100px; height:130px;"></td>
                        <td>
                            <a href="deletefav.php?id=<?= htmlspecialchars($row['id']) ?>">
                                <button class="button">
                                    <div class="trash">
                                        <div class="top">
                                            <div class="paper"></div>
                                        </div>
                                        <div class="box"></div>
                                        <div class="check">
                                            <svg viewBox="0 0 8 6">
                                                <polyline points="1 3.4 2.71428571 5 7 1"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <span style=".hover{text-decoration: none;}">Delete Item</span>
                                </button>
                            </a>
                            <!-- <span class="heart-icon" data-id="<?= htmlspecialchars($row['id']) ?>">&#x2764;</span> -->
                        </td>

                    </tr>
                <?php $sno++;
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#heartIcon").click(function() {
                $.ajax({
                    url: 'insert.php',
                    type: 'post',
                    data: {
                        insert_data: 1
                    },
                    success: function(response) {
                        alert(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

    <script>
        document.querySelectorAll(".button").forEach((button) =>
            button.addEventListener("click", (e) => {
                if (!button.classList.contains("delete")) {
                    e.preventDefault();
                    button.classList.add("delete");
                    setTimeout(() => {
                        button.classList.remove("delete");
                        window.location.href = button.parentElement.href;
                    }, 3400);
                }
            })
        );
    </script>
</body>

</html>