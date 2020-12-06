<?php

namespace Styde;

abstract class Language
{
    protected $messages = [];

    public function set(array $messages = array())
    {
        $this->messages = $messages;
    } 

    public function get($key, array $params = array())
    {
        if(! $this->has($key) ) {
            return "[$key]";
        }

        return $this->replaceParams($this->messages[$key], $params);
    }

    protected function has($key)
    {
        return isset($this->messages[$key]);
    }

    protected function replaceParams($message, $params)
    {
        foreach($params as $key => $value)
        {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}