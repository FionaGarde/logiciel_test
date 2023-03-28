<?php
namespace App;

class Hippo
{
    public $name;
    public $weight;
    public $tusksSize;  //taille des défenses

    public function __construct($name, $weight, $tusksSize) {
        $this->name = $name;
        $this->weight = $weight;
        $this->tusksSize = $tusksSize;
    }

    public function hippo(string $name, int $weight, int $tusksSize) {        
        return $this->name;
        return $this->weight;
        return $this->tusksSize;
    }

    public function swim($weight) {        
        $swim = $weight - 300;
    }

    public function eat($weight) {        
        $eat = $weight + 1000;
    }

    public function hippoFight($hippo2) {   
        if($this->weight < $hippo2->weight){
            return $hippo2;
        }
        elseif($this->weight > $hippo2->weight){
            return $this;
        }
        else{
            return 'match null';
        }
    }

    public function __toString(){
        return 'L\'hippopotame se nomme '.$name.'. Il pèse '.$weight.' grammes et mesure '.$tusksSize.' centimètres.';
    }

}


// $hippo1 = new Hippo();
// $hippo2 = new Hippo();
// $hippo1->hippoFight($hippo2);