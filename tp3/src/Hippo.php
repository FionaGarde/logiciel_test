<?php
namespace App;

class Hippo
{
    private $name;
    private $weight;
    private $tusksSize;  //taille des défenses

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

    public function hippoFight() {        
        $hippo1 = new Hippo();
        $hippo2 = new Hippo();

        if($this->weight.$hippo1 < $this->weight.$hippo2){
            return $hippo2;
        }
        elseif($this->weight.$hippo1 > $this->weight.$hippo2){
            return $hippo2;
        }
        else($this->weight.$hippo1 == $this->weight.$hippo2){
            return echo "match null";
        }
    }

}
