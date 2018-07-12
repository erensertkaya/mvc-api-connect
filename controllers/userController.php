<?php

class userController
{
    public $arr;
    public $acces_token = "volkan";
    public $first_name;
    public $surname;
    public $email;
    public $phone;
    public $password;
    public $gender;
    public $token;
    public $driver_id;

    public function __construct()
    {
        include(__DIR__ . '/../views/inc/header.php');
        include(__DIR__ . '/../views/inc/sidebar.php');
        include(__DIR__ . '/../views/user.php');
        include(__DIR__ . '/../views/inc/footer.php');
    }

    public function profile()
    {
        /*$exp = explode('/', $_GET['_url']);
        $this->token = $exp['2'];
        */
        $this->arr = $_SESSION['bilgi'];
        $this->first_name = $_SESSION['bilgi']['first_name'];
        $this->surname = $_SESSION['bilgi']['surname'];
        $this->email = $_SESSION['bilgi']['email'];
        $this->phone = $_SESSION['bilgi']['phone'];
        $this->password = $_SESSION['bilgi']['password'];
        $this->gender = $_SESSION['bilgi']['gender'];
        $this->token = $_SESSION['bilgi']['token'];
        $this->driver_id = $_SESSION['bilgi']['driver_id'];
    }




}

?>