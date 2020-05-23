<?php
    # logo
    echo "<body data-gr-c-s-loaded='true'><header><nav class='navbar navbar-expand-sm navbar-toggleable-sm navbar-light fixed-top bg-navbar border-bottom box-shadow mb-3'><div class='container'><a class='navbar-brand' href='./chisono.php?location=&amp;Chi sono&amp;'>Davide Castellani</a><button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.navbar-collapse' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button><div class='navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse'>";
    
    # init navbar 
    echo "<ul class='navbar-nav flex-grow-1'>";

    # Read
    $sql_navabar = "SELECT * FROM navbar";
    $result_navabar = $conn->query($sql_navabar);

    if ($result_navabar->num_rows > 0) {
        // output data of each row
        while($row_navabar = $result_navabar->fetch_assoc()) {
            echo "<li class='nav-item'><a class='nav-link text-dark' href='";
            if ($row_navabar['relative']){
                echo 'index.php?location=' . '"' . $row_navabar['location'] . '"';
			}
            else{
                echo $row_navabar['location'];
            }
            echo "'>" . $row_navabar['name'] . "</a></li>";
        }
    } else {
        echo "no object was founded";
    }
    #end navbar
    echo "</ul></div></div></nav>";
?>