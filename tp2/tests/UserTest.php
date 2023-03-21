<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
  // firstname
  public function testFirstnameValid() {
    $firstname = new User();
    $firstname = $firstname->firstname('julien');
    $this->assertEquals('julien',$firstname);
  }

  public function testFirstnameNotValid() {
    $firstname = new User();
    $firstname = $firstname->firstname(0865);
    $this->assertNotEquals(0865,$firstname);
  }

  // lastname
  public function testLastnameValid() {
    $lastname = new User();
    $lastname = $lastname->lastname('crys');
    $this->assertEquals('crys',$lastname);
  }

  public function testLastnameNotValid() {
    $lastname = new User();
    $lastname = $lastname->lastname(42);
    $this->assertNotEquals(43,$lastname);
  }

  // email
  public function testEmailValid() {
    $email = new User();
    $email = $email->email('info@info.fr');
    $this->assertEquals('info@info.fr',$email);
  }

  public function testEmailNotValid() {
    $email = new User();
    $email = $email->email('info');
    $this->assertNotEquals('info',$email);
  }

  // age
  public function testAgeValid() {
    $age = new User();
    $age = $age->age(13);
    $this->assertEquals(13,$age);
  }

  public function testAgeValid() {
    $age = new User();
    $age = $age->age(14);
    $this->assertEquals(14,$age);
  }
  
  public function testAgeNotValid() {
    $age = new User();
    $age = $age->age(12);
    $this->assertEquals(12,$age);
  }

}
