<?php

namespace Styde\Languages;

use Styde\Language;

class EnglishLanguage extends Language
{
    protected $messages = [
        'BasicBowAttack' => ':unit shot an arrow to :opponent',
        'BasicSwordAttack' => ':unit attack with a sword to :opponent',
        'CrossBowAttack' => ':unit shot an arrow with crossbow to :opponent',
        'FireBowAttack' => ':unit shot a fire arrow to :opponent',
        'UnitMove' => ':unit go to  :direction',
        'UnitDie' => ':unit die',
        'UnitPoints' => ':unit has :hp points of life now'
    ];
}