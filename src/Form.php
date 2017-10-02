<?php

namespace Iserter\LaravelForms;


/**
 * Class Form
 * @author Ilyas Serter <ilyasserter@gmail.com>
 * @package Iserter\LaravelForms
 *
 *
 * @method Form addTextInput($name,array $attributes = []) [hello]
 * @method Form addTextArea($name,array $attributes = [])
 * @method Form addSelectBox($name,array $attributes = [])
 *
 */
use Iserter\LaravelForms\Concerns\Attributes;
use Iserter\LaravelForms\Concerns\RequirableInterface;
use Iserter\LaravelForms\Concerns\Validation;

/**
 * Class Form
 * @package Iserter\LaravelForms
 */
class Form
{
    use Attributes, Validation;

    protected $theme = 'default';

    /**
     * @var array
     */
    protected $elements = [];


    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return array
     */
    public function data()
    {
        $data = [];
        foreach($this->elements as $e) {
            if(empty($e->getName())) {
                continue;
            }
            $data[$e->getName()] = $e->getValue();
        }

        return $data;
    }

    /**
     * @param array $data
     */
    public function fill(array $data)
    {
        foreach($this->elements as $e) {
            if(array_key_exists($e->getName(),$data)) {
                $e->setValue($data[$e->getName()]);
            }
        }
    }

    /**
     * @return array
     */
    public function fields()
    {
        $fields = [];
        foreach($this->elements as $e) {
            if(empty($e->getName()) || $e->getName() === '_token') {
                continue;
            }
            $fields[] = $e->getName();
        }
        return array_unique($fields);
    }


    /**
     * @param null $element
     * @return string
     */
    public function render($element = null)
    {
        if($element !== null) {
            return $this->renderElement($element);
        }

        /**
         * @var $e FormElement
         */
        foreach ($this->elements as $e) {
            $e->setTheme($this->getTheme());
            if($e instanceof RequirableInterface) {
                if(array_key_exists($e->name(),$this->rules) && str_contains($this->rules[$e->name()],'required')) {
                    $e->setRequired();
                }
            }
        }

        return view('laravel-forms::'.$this->theme.'.form',['form' => $this])->render();

    }

    /**
     * @param $name
     * @return string
     */
    public function renderElement($name)
    {
        $elementContent = [];
        /**
         * @var $e FormElement
         */
        foreach($this->elements as $e) {
            if($e->getName() == $name) {
                $e->setTheme($this->getTheme());
                $elementContent[] = $e->render();
            }
        }

        return implode('',$elementContent);
    }


    /*
    |--------------------------------------------------------------------------
    | Getters & Setters
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @param FormElement $element
     * @return $this
     */
    public function addElement(FormElement $element)
    {
        $this->elements[] = $element;
        return $this;
    }

    /**
     * @param FormElement[] $elements
     * @return $this
     */
    public function addElements(FormElement ...$elements)
    {
        foreach($elements as $element) {
            $this->elements[] = $element;
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /*
    |--------------------------------------------------------------------------
    | Magic Methods
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return string
     */
    function __toString()
    {
        return $this->render();
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     */
    function __call($name, $arguments)
    {
        if(substr($name,0,3) == 'add') {
            $element = substr($name,3);
            $el = Elements\Factory::make($element,$arguments);
            $this->addElement($el);
            return $this;
        }

        throw new \BadMethodCallException;
    }
}