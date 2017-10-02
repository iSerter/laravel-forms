<?php

namespace Iserter\LaravelForms;

use Iserter\LaravelForms\Concerns\Attributes;

/**
 * Class Element
 * @author Ilyas Serter <ilyasserter@gmail.com>
 * @package Iserter\LaravelForms\Elements
 */
abstract class FormElement
{
    use Attributes;

    protected $name;
    protected $value;
    protected $default = '';
    protected $label = '';
    protected $theme = 'default';
    protected $view;

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
     * @return mixed
     */
    function render()
    {
        return view('laravel-forms::'.$this->theme.'.' . $this->view, ['e' => $this])->render();
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

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }


    /*
    |--------------------------------------------------------------------------
    | Magic Methods
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return mixed
     */
    function __toString()
    {
        return $this->render();
    }



}