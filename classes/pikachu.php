<?php
class Pikachu extends Pokemon{
    function __construct($name)
    {

        parent:: __construct($name, EnergyType::ELECTRIC, 60, 60, ["Electric Ring" => new Attack("Electric Ring", 50), "Pika Punch" => new Attack("Pika Punch", 20)], new Weakness(EnergyType::FIRE, 1.5), new Resistance(EnergyType::FIGHTING, 20));
    }
}