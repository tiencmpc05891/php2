<?php

namespace App\Core;

class Form
{
    public function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return $this;
    }
    public function end()
    {
        return '</form>';
    }

    public function field($attribute)
    {
        return new Field($attribute);
    }
}