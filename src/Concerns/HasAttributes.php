<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 01/10/17
 * Time: 00:50
 */

namespace Iserter\LaravelForms\Concerns;

/**
 * Class HasAttributes
 * @package Iserter\LaravelForms\Concerns
 */
trait HasAttributes {

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @param $name
     * @return bool
     */
    public function hasAttribute($name)
    {
        return array_key_exists($name,$this->attributes);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getAttribute($name)
    {
        if($this->hasAttribute($name) === false) {
            return null;
        }

        return $this->attributes[$name];
    }

    /**
     * @return bool
     */
    public function hasAttributes()
    {
        return !empty($this->attributes);
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function addAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function removeAttribute($name)
    {
        unset($this->attributes[$name]);
        return $this;
    }

    /**
     * @return string
     */
    public function attributes()
    {
        $attributes = '';
        foreach($this->attributes as $k => $v) {
            $attributes .= ' ' . $k . '="' . htmlspecialchars($v,ENT_HTML5) . '"';
        }

        return $attributes;
    }
}