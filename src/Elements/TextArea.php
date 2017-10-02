<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:28
 */

namespace Iserter\LaravelForms\Elements;

use Iserter\LaravelForms\Concerns\Requirable;
use Iserter\LaravelForms\Concerns\RequirableInterface;
use Iserter\LaravelForms\FormElement;

/**
 * Class TextArea
 * @author Ilyas Serter <info@ilyasserter.com>
 * @package Iserter\LaravelForms\Elements
 */
class TextArea extends FormElement implements RequirableInterface
{
    use Requirable;

    /**
     * @var string
     */
    protected $view = 'textarea';

}