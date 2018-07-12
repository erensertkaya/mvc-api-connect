<?php
class duzenleController extends userController
{
    public function __construct()
    {

    }

    public function goruntule()
    {
        include(__DIR__ . '/../views/inc/header.php');
        include(__DIR__ . '/../views/inc/sidebar.php');
        include(__DIR__ . '/../views/duzenle.php');
        include(__DIR__ . '/../views/inc/footer.php');
    }

    public function duzenle()
    {
        $postData = array(
            'access_token' => 'volkan',
            'driver_id' => $_POST['driver_id'],
            'token' => $_POST['token'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'first_name' => $_POST['first_name'],
            'surname' => $_POST['surname'],
            'phone' => $_POST['phone'],
            'gender' => $_POST['gender']
        );


        $ch = curl_init('http://taxi.smartlimon.com/driver/updateProfile');
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
        if ($responseData)
        {
            header("Location: ?_url=duzenle/getResponse/basarili");
            exit();
        }

    }
    public function getResponse($p)
    {
        if ($p=="basarili")
        {
            echo "basarili";
        }
        else
        {
            echo "basarisiz";
        }
    }
    public function sessionDestroy()
    {
        $destroy = session_destroy();
        var_dump($destroy);
        if ($destroy)
        {
            header('Location:/');
            exit();
        }
    }

}