<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:04
 */

namespace Laravel\Forms\Elements;

use Laravel\Forms\Concerns\Placeholder;
use Laravel\Forms\Concerns\Requirable;
use Laravel\Forms\Concerns\RequirableInterface;
use Laravel\Forms\FormElement;

/**
 * Class TextInput
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Laravel\Forms\Elements
 */
class TextInput extends FormElement implements RequirableInterface
{
    use Requirable;

    /**
     * @var string
     */
    protected $view = 'laravel-forms::textinput';



}