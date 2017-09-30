<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:29
 */

namespace Laravel\Forms\Elements;


use Laravel\Forms\FormElement;

/**
 * Class Hidden
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Laravel\Forms\Elements
 */
class Hidden extends FormElement
{
    /**
     * @var string
     */
    protected $view = 'laravel-forms::hidden';
}