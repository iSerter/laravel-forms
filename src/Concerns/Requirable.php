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
                $this->isRequired = true;
            }
        }

        return $this->isRequired;
    }
    
    public function setRequired()
    {
        $this->isRequired = true;
        $this->attributes['required'] = true;
    }
}

