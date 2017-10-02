<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:19
 */

namespace Iserter\LaravelForms\Elements;

use Iserter\LaravelForms\FormElement;

/**
 * Class SelectBox
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Iserter\LaravelForms\Elements
 */
class SelectBox extends FormElement
{

    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $view = 'selectbox';


    /**
     * SelectBox constructor.
     * @param string $label
     * @param string $name
     * @param array $options
     */
    public function __construct($label, $name, array $options = [])
    {
        parent::__construct($label, $name, []);
        $this->options = $options;
    }

    /*
    |--------------------------------------------------------------------------
    | Getters & Setters
    |--------------------------------------------------------------------------
    | 
    */

    /**
     * alias to getOptions()
     * @return array
     */
    public function options()
    {
        return $this->getOptions();
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

}