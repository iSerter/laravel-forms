<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 02/10/17
 * Time: 23:11
 */

namespace Iserter\LaravelForms;


class Attribute
{
    protected $name;
    protected $value;

    public function __construct($name,$value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /*
    |--------------------------------------------------------------------------
    | Getters & Setters
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /*
    |--------------------------------------------------------------------------
    | Magic Methods
    |--------------------------------------------------------------------------
    |
    */

    public function __toString()
    {
        return $this->name . '="' . $this->value . '"';
    }

}