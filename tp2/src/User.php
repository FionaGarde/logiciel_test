<?php
namespace App;

class User
{
    private $firstname;
    private $lastname;
    private $email;
    private $age;

    public function __construct($firstname, $lastname, $email, $age) {
        $this->firstanme = $firstname;
        $this->lastanme = $lastname;
        $this->email = $email;
        $this->age = $age;
    }

    public function firstname(string $firstname) {
  		return $this->firstname;
  	}

    public function lastname(string $lastname) {
  		return $this->lastname;
  	}

    public function email(string $email) {
  		if($email, FILTER_VALIDATE_EMAIL){
            return $this->email;
        }
  	}

    public function age(int $age) {
        if ($age > 13 || $age == 13) 
            return $this->age;
        
  	}

}
