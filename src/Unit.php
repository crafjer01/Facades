<?php

namespace Styde;

use Styde\Armors\MissingArmor;
use Styde\Weapons\BasicBow;
use Styde\Weapons\BasicSword;

class Unit 
{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor;
    }

    public static function createSoldier($name)
    {
        return new Unit($name, new BasicSword);
    }

    public static function createArcher($name)
    {
        return new Unit($name, new BasicBow);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setArmor(Armor $armor)
    {
        $this->armor = $armor;

        return $this;
    }
    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function setShield()
    {
        return $this;
    }

    public function move($direction)
    {
        Log::info(Translator::get(
            $this->getClass().'Move', [
            'unit' => $this->name,
            'direction' => $direction]));
    }

    protected function getClass()
    {
        return str_replace('Styde\\', '', get_class($this));
    }

    public function die() 
    {
        Log::info(Translator::get(
            $this->getClass().'Die', [
            'unit' => $this->name ] ));

        exit();
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

        $this->hpSetCero();

        Log::info(Translator::get(
            $this->getClass().'Points', [
            'unit' => $this->name,
            'hp' => $this->hp] ));

        if($this->hp <= 0) {
            $this->die();
        }
    }

    private function hpSetCero()
    {
        if($this->hp < 0) {
            $this->hp = 0;
        }
    }
    
    public function attack(Unit $opponent) 
    {
        $attack = $this->weapon->createAttack();

        Log::info($attack->getDescription($this, $opponent));
        
        $opponent->takeDamage($attack);
    }

}
