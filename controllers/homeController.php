<?php

class homeController
{

    public function __construct()
    {

    }

    public function index()
    {

        include(__DIR__ . '/../views/home.php');
    }

    public function giris()
    {
        $email = $_POST['kadi'];
        $pass = $_POST['pass'];

        $fields = array(
            'access_token' => 'volkan',
            'email' => $email,
            'password' => $pass
        );
        $ch = curl_init('http://taxi.smartlimon.com/driver/login');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
            CURLOPT_POSTFIELDS => json_encode($fields)
        ));
        $response = curl_exec($ch);

// Check for errors
        if ($response === FALSE) {
            die(curl_error($ch));
        }

// Decode the response
        $responseData = json_decode($response, TRUE);
        if ($responseData['response']['email'] == $email && $responseData['response']['password'] == $pass) {
            $token = $responseData['response']['token'];
            session_start();
            header("Location: ?_url=user/profile");
            $_SESSION['bilgi'] = $responseData['response'];
            exit();
        }
    }

    public function getResponse($p)
    {
        include(__DIR__ . '/../views/home.php');
        if ($p == "basarili") {
            echo "Kayıt İşlemi Başarılı";
        } else {
            echo "Kayıt İşlemi Başarısız";
        }

    }

    public function authControl()
    {
        if (!($_SESSION['bilgi'])) {
            header('Location:/');
            exit();
        }
    }

}

?>