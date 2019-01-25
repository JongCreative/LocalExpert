<?php

    //expert.PHP

    include "db_connection.php";

    $sql_querie = "SELECT * FROM expert";
    
    $db_result = $conn->query($sql_querie);

    foreach ($db_result as $row) {
        echo '<section class="expert-wrapper ' . $row['firstname'] . '">' .
             '<a class="expert destination_link" href="expert.php?expert_id=' . $row['expert_id'] . '">' .
             '<img class="expert expert-profile" src="' . $row['img_url'] . '" alt="' . $row['firstname'] . '">' .
             '<div class="expert-caption-wrapper">' . 
             '<h3>' . $row['firstname'] . " " . $row['lastname'] . '</h3>' .
             '<p>' . $row['email'] . '</p>' .
             '</div>' . 
             '</a>' .
             '</section>';
    }

    $conn = null;
