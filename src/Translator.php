<?php

namespace Styde;

class Translator
{
    protected static $language;

    public static function setLanguage(Language $language)
    {
        static::$language = $language; 
    }

    public static function get($key, array $params = array())
    {
        return static::$language->get($key, $params);
    }
}