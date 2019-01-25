<?php

    //destination.PHP

    include "db_connection.php";

    $sql_querie = "SELECT * FROM destination";
    
    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row) {
        echo '<section class="destination-wrapper ' . $row['continent'] . '">' .
             '<a class="destination destination_link" href="destination.php?destination_id=' . $row['destination_id'] . '">' .
             '<img class="destination destination-img" src="' . $row['img_url'] . '" alt="' . $row['destination_city'] . '">' .
             '<div class="destination-caption-wrapper">' . 
             '<h3>' . $row['destination_city'] . '</h3>' .
             '<p>' . $row['destination_caption'] . '</p>' .
             '</div>' . 
             '</a>' .
             '</section>';
    }

    $conn = null;
