<?php

namespace Styde\Languages;

use Styde\Language;

class SpanishLanguage extends Language
{
    protected $messages = [
        'BasicBowAttack' => ':unit dispara una flecha a :opponent',
        'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
        'CrossBowAttack' => ':unit dispara una flecha con una ballesta a :opponent',
        'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
        'UnitMove' => ':unit avanza hacia :direction',
        'UnitDie' => ':unit Muere',
        'UnitPoints' => ':unit ahora tiene :hp de vida'
    ];
}