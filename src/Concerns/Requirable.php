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
    /**
     * @return boolean
     */
    public function isIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

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

