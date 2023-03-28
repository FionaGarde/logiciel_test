<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Hippo;

class HippoTest extends TestCase
{

  // hippo
  public function tesHipponameValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 'julien';
    $weight = $hippo->weight = 500 ;
    $tusksSize = $hippo->tusksSize =2;
    $this->assertEquals('julien', 500, 2, $hippo);
  }

  public function testHippoAllNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 5;
    $weight = $hippo->weight = 'lucky';
    $tusksSize = $hippo->tusksSize = 'rctvyb';
    $this->assertEquals(5, 'lucky', 'rctvyb', $hippo);
  }

  public function testHippoWeightNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 'j';
    $weight = $hippo->weight = 'lucky';
    $tusksSize = $hippo->tusksSize = 2;
    $this->assertEquals('j', 'lucky', 2, $hippo);
  }

  public function testHippoTsuksSizeNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 'k';
    $weight = $hippo->weight = 590;
    $tusksSize = $hippo->tusksSize = 'gg';
    $this->assertEquals('k', 590, 'gg', $hippo);
  }

  public function testHippoWeightTsuksSizeNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 'k';
    $weight = $hippo->weight = 'lucky';
    $tusksSize = $hippo->tusksSize = 'l';
    $this->assertEquals('k', 'lucky', 'l', $hippo);
  }

  public function testHippoNameNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 5;
    $weight = $hippo->weight = 700;
    $tusksSize = $hippo->tusksSize = 900;
    $this->assertEquals(5, 700, 900, $hippo);
  }

  public function testHippoNameWeightNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 52;
    $weight = $hippo->weight = 'lucky';
    $tusksSize = $hippo->tusksSize = 2;
    $this->assertEquals(52, 'lucky', 2, $hippo);
  }

  public function testHippoNameTsuksSizeNotValid() {
    $hippo = new Hippo("Bob", 10, 20);
    $name = $hippo->name = 5;
    $weight = $hippo->weight = 540;
    $tusksSize = $hippo->tusksSize = 'a';
    $this->assertEquals(52, 540, 'a', $hippo);
  }

  // swim
  public function testSwimValid() {
    $swim = new Hippo("Bob", 10, 20);
    $swim = $hippo->swim = 490;
    $this->assertEquals(490, $swim);
  }

  public function testSwimNotValid() {
    $swim = new Hippo("Bob", 10, 20);
    $swim = $hippo->swim = 'ff';
    $this->assertNotEquals('ff', $swim);
  }

  public function testSwimNoIntNotValid() {
    $swim = new Hippo("Bob", 10, 20);
    $swim = $hippo->swim = 45.10;
    $this->assertNotEquals(45.10, $swim);
  }

  // eat
  public function testEatValid() {
    $eat = new Hippo("Bob", 10, 20);
    $eat = $hippo->eat = 750;
    $this->assertNotEquals(7500, $eat);
  }

  public function testEatNotValid() {
    $eat = new Hippo("Bob", 10, 20);
    $eat = $hippo->eat = ('l');
    $this->assertNotEquals('lo', $eat);
  }

  public function testEatNoIntNotValid() {
    $swim = new Hippo("Bob", 10, 20);
    $swim = $hippo->eat = 45.10;
    $this->assertNotEquals(45.10, $swim);
  }

  // fight
  public function testHippoFightValid() {
    $hippoFight = new Hippo("Bob", 10, 20);
    $hippo2 = new Hippo("Bob", 10, 20);
    $hippoFight = $hippoFight->hippoFight($hippo2);
    $this->assertEquals($hippo2, $hippoFight);
  }

  // fight
  public function testHippoFightNotValid() {
    $hippoFight = new Hippo("Bob", 10, 20);
    $hippo2 = new Hippo("Bob", 50, 40);
    $hippoFight = $hippoFight->hippoFight(54);
    $this->assertNotEquals(54, $hippoFight);
  }

}
