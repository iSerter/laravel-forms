<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 01/10/17
 * Time: 00:20
 */

namespace Iserter\LaravelForms\Concerns;

/**
 * Class Requirable
 * @package Iserter\LaravelForms\Elements\Concerns
 */
trait Requirable {

    public $isRequired = false;
    protected $attributes;

    public function isRequired()
    {
        foreach($this->attributes as $name => $value) {
            if($name === 'required' && $value) {
                return true;
            }
        }

        return false;
    }
    
    public function setRequired()
    {
        $this->isRequired = true;
        $this->attributes['required'] = true;
    }

    public function attributes()
    {
        $attributes = '';
        foreach($this->attributes as $k => $v) {
            if($k=='required' && $v) {
                $attributes .= ' required';
                continue;
            }
            $attributes .= ' '.$k . '="' . htmlspecialchars($v,ENT_HTML5) . '"';
        }

        return $attributes;
    }
}

interface RequirableInterface {
    public function isRequired();
    public function setRequired();
}