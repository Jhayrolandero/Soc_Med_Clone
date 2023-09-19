<?php
if ($jsonData !== null) {
    // Access the JSON data
    $fname = $jsonData->fname;
    $lname = $jsonData->lname;
    $email = $jsonData->email;
    $password = $jsonData->password;

    if(empty($fname) || empty($lname) || empty($email) || empty($password)){
        echo json_encode("Input all missing fields!");
        exit();
    }

    if($user_obj->check_email($email)){
        echo json_encode("Email already taken!");
        exit();
    }

    try{
        $user_obj->add_user($fname, $lname, $password, $email);
        $response = "Added successfully!";
        echo json_encode($response);
    }catch(Exception $e){
        echo $e;
        // echo json_encode("Error adding user!");
    }

} else {
    // Handle invalid or missing JSON data
    echo json_encode('Invalid JSON data received');
}

