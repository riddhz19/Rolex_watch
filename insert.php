<?php
if (isset($_POST['insert_data'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "favourite";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $items = [
        1 => ['name' => 'Oyster Perpetual 41', 'price' => '9519000', 'image' => 'img/f1.jpg'],
        2 => ['name' => 'Explore 36', 'price' => '115000', 'image' => 'img/f2-removebg-preview.png'],
        3 => ['name' => 'Submariner Date', 'price' => '850000', 'image' => 'img/f3.jpg'],
        4 => ['name' => 'Day-Date', 'price' => '9279100', 'image' => 'img/datejust36.jpg'],
        5 => ['name' => 'Submariner', 'price' => '4279100', 'image' => 'img/submariner.jpg'],
        6 => ['name' => 'GMT-Master II', 'price' => '9284000', 'image' => 'img/gmtii.jpg'],
        7 => ['name' => 'Day-Date 40', 'price' => '5052820', 'image' => 'img/dayd40.jpg'],
        8 => ['name' => 'Cosmograph Daytona', 'price' => '5610765', 'image' => 'img/cosmo.jpg'],
        9 => ['name' => 'Oyster Prepetual 41', 'price' => '1080000', 'image' => 'img/oysterpre.jpg'],
        10 => ['name' => 'Yatch-Master 42', 'price' => '2894000', 'image' => 'img/yatch2.jpg'],
        11 => ['name' => 'Sea-Dweller', 'price' => '1240500', 'image' => 'img/seed.jpg'],
        12 => ['name' => 'Rolex Deepsea', 'price' => '3327664', 'image' => 'img/roldeep.jpg'],
        13 => ['name' => 'Air-King', 'price' => '647500', 'image' => 'img/airkingm.jpg'],
        14 => ['name' => 'Explore 36', 'price' => '9279400', 'image' => 'img/ex36.jpg'],
        15 => ['name' => 'Lady-Datejust', 'price' => '1591000', 'image' => 'img/ladydate.jpg'],
        16 => ['name' => 'Sky-Dweller', 'price' => '1384500', 'image' => 'img/skyd.jpg'],
        17 => ['name' => '1908', 'price' => '2004500', 'image' => 'img/1908m.jpg'],
        18 => ['name' => 'Day-Date 40 Diamond', 'price' => '1759000', 'image' => 'img/date40.jpg'],
        19 => ['name' => 'Day-Date 40 Platinum', 'price' => '2648700', 'image' => 'img/dd40.jpg'],
        20 => ['name' => 'Day-Date 36', 'price' => '9765400', 'image' => 'img/dd40.jpg'],
        21 => ['name' => 'Day-Date 40 Everose', 'price' => '1357500', 'image' => 'img/dd40gold.jpg'],
        22 => ['name' => 'Day-Date 36 platinum', 'price' => '9201000', 'image' => 'img/dd36pl.jpg'],
        23 => ['name' => 'Day-Date 40 Gold', 'price' => '3729000', 'image' => 'img/dd40green.jpg'],
        24 => ['name' => 'Day-Date 40 Oyster', 'price' => '7319000', 'image' => 'img/dd40gold.jpg'],
        25 => ['name' => 'Day-Date 36 White', 'price' => '8295000', 'image' => 'img/dd36pl.jpg'],
        26 => ['name' => 'Day-Date 36 Oyster', 'price' => '1859600', 'image' => 'img/dd36.jpg'],
        27 => ['name' => 'Day-Date 40 Oyster', 'price' => '3949000', 'image' => 'img/dd40goldoy.jpg']
    ];
    $insert_data = isset($_POST['insert_data']) ? (int)$_POST['insert_data'] : 0;
    if (isset($items[$insert_data])) {
        $item = $items[$insert_data];
        $stmt = $conn->prepare("SELECT * FROM getinsert WHERE name = ?");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("s", $item['name']);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "Alert: Watch already exists!";
        } else {
            $stmt = $conn->prepare("INSERT INTO getinsert(name, price, image) VALUES (?, ?, ?)");
            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }
            $stmt->bind_param("sss", $item['name'], $item['price'], $item['image']);

            if ($stmt->execute()) {
                echo "New Watch Added successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
        }
        $stmt->close();
    } else {
        echo "Invalid request";
    }
    $conn->close();
}
?>
