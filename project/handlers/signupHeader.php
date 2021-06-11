<?php
include('../modules/functions.php');

    $response = [];

    if( !empty($_POST['data'] ) ){
        $data = json_decode($_POST['data'], true);

        $sql = "INSERT INTO `communication_form`(`id`, `name`, `email`)
        VALUES (NULL,'{$data['name']}','{$data['email']}' )";
        $result = mysqli_query($db, $sql);

        if( $result ){
            $response['result'] = 'success';
        }else{
            $response['result'] = 'fail';
        }
    }else{
        $response['result'] = 'fail';
    }
    echo json_encode($response);
?>