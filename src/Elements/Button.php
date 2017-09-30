<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 22:39
 */

namespace Laravel\Forms\Elements;


use Laravel\Forms\FormElement;

class Button extends FormElement
{
    protected $view = 'laravel-forms::button';
    protected $type;

    public function __construct($label,$type = null)
    {
        parent::__construct($label);
        $this->type = $type;
    }

    public function hasType() {
        return $this->type !== null;
    }

    public function type()
    {
        return $this->getType();
    }

    /**
     * @return null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}