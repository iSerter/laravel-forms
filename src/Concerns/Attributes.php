<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 01/10/17
 * Time: 00:50
 */

namespace Laravel\Forms\Concerns;

trait Attributes {

    protected $attributes = [];

    public function hasAttribute($name)
    {
        return array_key_exists($name,$this->attributes);
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }

    public function hasAttributes()
    {
        return !empty($this->attributes);
    }
    
    public function addAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function removeAttribute($name)
    {
        unset($this->attributes[$name]);
        return $this;
    }

    public function attributes()
    {
        $attributes = '';
        foreach($this->attributes as $k => $v) {
            $attributes .= ' ' . $k . '="' . htmlspecialchars($v,ENT_HTML5) . '"';
        }

        return $attributes;
    }
}