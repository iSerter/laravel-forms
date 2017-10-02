<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 22:39
 */

namespace Iserter\LaravelForms\Elements;


use Iserter\LaravelForms\FormElement;

class Button extends FormElement
{
    protected $view = 'button';
    protected $type;

    public function __construct($label,$type = null)
    {
        parent::__construct($label);
        $this->type = $type;
    }

    public function hasType() {
        return $this->type !== null;
    }

    /**
     * alias to getType()
     * @return
     */
    public function type()
    {
        return $this->getType();
    }

    /**
     * @return
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}