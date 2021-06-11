<?php
    function d($ar){
        echo "<pre>";
        print_r($ar);
        echo "</pre>";
    }
    $db = mysqli_connect('localhost', 'root', '', 'project_2');
    mysqli_set_charset($db, 'utf8');
?>
