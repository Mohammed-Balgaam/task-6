<?php 
include './Validation.php';
class Valdate_Email extends Validation
{
    public $validEmail;

    public function __construct($email)
    {
        $this->validWord = $email;
    }
    public static function validate()
    {
        echo filter_var($this->validWord, FILTER_VALIDATE_EMAIL);
         
    }
}

$vali = new Valdate_Email('test@example.com');

Valdate_Email::validate();

// if (filter_var($vali->validWord,FILTER_VALIDATE_EMAIL )) 
// {
//     echo 'Email is valid';
// } else {
//     echo 'Email is not valid';
// }
