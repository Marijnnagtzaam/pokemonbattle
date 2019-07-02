<?php 

abstract class Pokemon {
    // private maken kunnen oproepen met een __get($property)
    private $name; 
    private $energyType;
    private $health;
    private $attacks = [];
    private $weakness;
    private $resistance;
   
    public function __construct($name, $energyType, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints; 
        $this->health = $health; 
        $this->attacks = $attacks;
        $this->weakness = $weakness; 
        $this->resistance = $resistance; 
    }
    
    public function takeDamage($hitpoints, $energyType){
        // if else check on pokemon weakness
        if ($energyType == $this->weakness->energyType){
            // new damage value based on target weakness
            $damage = $hitpoints * $this->weakness->value; 
            $this->health -= $damage; 
        } elseif($this->resistance->energyType == $energyType) {
            $damage = $hitpoints - $target->resistance->value;
            $this->health -= $damage; 
        }
        else {
            $this->health -= $attack->hitpoints; 
        }

    }

    public function attackPokemon($target, $attack){
        $target->takeDamage($attack->hitpoints, $this->energyType);
    }

    public function getHealth(){
        return $this->name . "'s health is " . $this->health;
    }
    
    public function getAttack($attackName){
        return $this->attacks[$attackName];
    }
    
    public function getName(){
        return $this->name;
    }
}


