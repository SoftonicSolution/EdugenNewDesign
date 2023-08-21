<?php
$conn = new mysqli('localhost','edugeoq8_edu','BMRsduG9sA','edugeoq8_edudb')or die($conn->connect_error);

    
    
    $insert = $conn->query('INSERT INTO `tblcontact_form`(`name`, `phone`, `email`, `comment`, `created_at`) VALUES ("'.$_POST["name"].'","'.$_POST["phone"].'","'.$_POST["email"].'","'.$_POST["comment"].'","'.date('Y-m-d H:i:s').'")'); 

    if ($insert) {
        echo json_encode(['status' => true, 'message' => 'Message sent']);
    } else {
        echo json_encode(['status' => false, 'message' => 'Message not sent']);
    }
    exit;



