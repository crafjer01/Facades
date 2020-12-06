<?php

namespace Styde;

use Styde\Armors\SilverArmor;
use Styde\Languages\EnglishLanguage;
use Styde\Languages\SpanishLanguage;
use Styde\Weapons\FireBow;

require '../vendor/autoload.php';

Translator::setLanguage(new EnglishLanguage);

Log::setLogger(new Loggers\HtmlLogger);

$ramn = Unit::createSoldier('Ramn')
    ->setWeapon(new FireBow)
    ->setArmor(new SilverArmor)
    ->setShield();

$silence = Unit::createArcher('Silence');

$silence->attack($ramn);

$ramn->setArmor(new SilverArmor);

$silence->attack($ramn);

$ramn->attack($silence);