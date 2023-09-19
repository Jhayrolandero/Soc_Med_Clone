<?php
if ($jsonData !== null) {
    // Access the JSON data
    $email = $jsonData->email;
    $password = $jsonData->password;

    if(empty($email) || empty($password)){
        echo json_encode("Input all missing fields!");
        exit();
    }

    try{
        if($user_obj->validate_user($email, $password)){
            echo json_encode("Login successfully!");
        } else {
            echo json_encode("User does not exist!");
        }

    }catch(Exception){
        echo json_encode("Error adding user!");
    }

} else {
    // Handle invalid or missing JSON data
    echo json_encode('Invalid JSON data received');
}

