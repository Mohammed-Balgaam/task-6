<?php
 class Validation
{
    public $email;
    public $password;
    public function __construct()
    {

    }
    public static function validate_Email($email)
    {
        if( filter_var($email ,FILTER_VALIDATE_EMAIL))
        {
            echo "Email valid";
        }else
        {
            echo "Invalid email";
        }
    }

    public static function validate_url($url)
    {
        if( filter_var($url ,FILTER_VALIDATE_URL))
        {
            echo "url valid";
        }else
        {
            echo "Invalid url";
        }
    }


    public static function validatePassword($password)
    {
        $hasLength = strlen($password) >= 8;
        $hasUpperCase = preg_match('/[A-Z]/', $password);
        $hasLowerCase = preg_match('/[a-z]/', $password);
        $hasNumber = preg_match('/[0-9]/', $password);
        $hasSpecialChar = preg_match('/[\W_]/', $password);

        if ($hasLength && $hasUpperCase && $hasLowerCase && $hasNumber && $hasSpecialChar) {
            echo "Password is valid";
        } else {
            echo "Password is invalid";
        }
    }
} 

$validation = new Validation();

Validation::validate_Email('balgaam@gmail.com');

echo '<br>';

Validation::validate_url('https://www.google.com');

echo '<br>';

Validation::validatePassword('Password123');