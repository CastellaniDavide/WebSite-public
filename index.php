<?php
    include 'conn.php';
    /* # Insert
    $sql = "INSERT INTO `structure`(`name`) VALUES ('value-3')"; 
    # INSERT INTO `structure`(`father`, `name`, `img`, `put-data`, `data`, `link`) VALUES ('index','test01','html.png',1,'2020-05-01','https://www.castellanidavide.it/')

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    # default location
    if(!$_GET['location']) $_GET['location'] = '"Home page"';

    # Read
    $sql = "SELECT * FROM structure WHERE father=" . $_GET['location']; # WHERE ...
    $result = $conn->query($sql);

    # Made my webpage
    include 'init.php';

    #center
    switch ($_GET['location']) {
        case '"Help"':
            header('Location: ./Help.php?location="Help"');
            break;
        case '"Loghi"':
            header('Location: ./Loghi.php?location="Loghi"');
            break;
        case '"login"':
            header('Location: ./managemywebsite.php?location=%27Manage%20WebSite"');
            break;
        default:
        echo "<div class='card-columns'>";
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card text-center'><a href='" . $row['link'] . "' style='color: black; text-decoration-line: none'><img class='card-img-top' src='./imgs/" . $row['img'] ."' alt='Image don&#039;t found'><div class='card-title'><h3 style='font-family: &#039;Yellowtail', cursive;&#039;>" . $row['name'] . "</h3></div><div class='card-subtitle'></div></a></div>";
                }
            } else {
                echo "no object was founded";
            }
    }

    include 'end.php';

    $conn->close();
?>