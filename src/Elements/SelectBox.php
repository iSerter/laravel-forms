<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:19
 */

namespace Laravel\Forms\Elements;

use Laravel\Forms\FormElement;

/**
 * Class SelectBox
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Laravel\Forms\Elements
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
    protected $view = 'laravel-forms::selectbox';


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