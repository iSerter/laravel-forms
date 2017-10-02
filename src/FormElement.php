<?php

namespace Iserter\LaravelForms;

use Iserter\LaravelForms\Concerns\HasAttributes;

/**
 * Class Element
 * @author Ilyas Serter <ilyasserter@gmail.com>
 * @package Iserter\LaravelForms\Elements
 */
abstract class FormElement extends Element
{
    protected $name;
    protected $value;
    protected $default;
    protected $label;
    protected $theme = 'bootstrap4';
    protected $formAttributes = ['required','disabled','readonly','checked'];


    public function __construct($label = null, $name = null, array $attributes = [])
    {
        $this->label = $label;
        $this->name = $name;

        if (isset($attributes['value'])) {
            $this->setValue($attributes['value']);
            unset($attributes['value']);
        }

        foreach ($attributes as $name => $value) {
            $this->addAttribute($name, $value);
        }
    }

    /**
     * @return string
     */
    public function attributes()
    {
        $attributes = '';
        $formAttributes = '';
        foreach($this->attributes as $k => $v) {
            if(in_array($k,$this->formAttributes) && $v) {
                $formAttributes .= ' ' . $formAttributes;
                continue;
            }
            $attributes .= ' ' . $k . '="' . htmlspecialchars($v,ENT_HTML5) . '"';
        }

        return $attributes . $formAttributes;
    }

    /*
    |--------------------------------------------------------------------------
    | Getters & Setters
    |--------------------------------------------------------------------------
    |
    */

    /**
     * alias
     * @return mixed
     */
    public function name()
    {
        return $this->getName();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function label()
    {
        return $this->getLabel();
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param string $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    public function value()
    {
        return $this->getValue();
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value ?: $this->default;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }





}