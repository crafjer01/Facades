<?php

namespace Styde\Armors;

use Styde\Armor;
use Styde\Attack;

class EvasionArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($this->hasLucky()) {
            return $attack->makeDamage();
        }
    }

    public function hasLucky() {
        return rand(0,1);
    }
}
