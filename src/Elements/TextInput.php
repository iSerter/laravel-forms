<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:04
 */

namespace Iserter\LaravelForms\Elements;

use Iserter\LaravelForms\Concerns\Placeholder;
use Iserter\LaravelForms\Concerns\Requirable;
use Iserter\LaravelForms\Concerns\RequirableInterface;
use Iserter\LaravelForms\FormElement;

/**
 * Class TextInput
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Iserter\LaravelForms\Elements
 */
class TextInput extends FormElement implements RequirableInterface
{
    use Requirable;

    /**
     * @var string
     */
    protected $view = 'laravel-forms::textinput';



}