<?php

class signupController
{

    public function __construct()
    {
    }

    public function index()
    {

    }

    public function kaydol()
    {
        include(__DIR__ . '/../views/inc/header.php');
        include(__DIR__ . '/../views/signup.php');
        include(__DIR__ . '/../views/inc/footer.php');
    }

    public function kayit()
    {
        $postData = array(
            'access_token' => 'volkan',
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'first_name' => $_POST['first_name'],
            'surname' => $_POST['surname'],
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender']
        );


        $ch = curl_init('http://taxi.smartlimon.com/driver/signup');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));
        $response = curl_exec($ch);

// Check for errors
        if ($response === FALSE) {
            die(curl_error($ch));
        }

// Decode the response
        $responseData = json_decode($response, TRUE);

        if ($postData) {
            header('Location: ?_url=home/getResponse/basarili');
            exit();
        } else {
            header('Location: ?_url=home/getResponse/basarisiz');
            exit();
        }
    }


}

?>