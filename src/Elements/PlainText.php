<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 02/10/17
 * Time: 23:53
 */

namespace Iserter\LaravelForms\Elements;


use Iserter\LaravelForms\Element;

/**
 * Class PlainText
 * @package Iserter\LaravelForms\Elements
 */
class PlainText extends Element
{
    /**
     * @var
     */
    protected $text;

    /**
     * @var
     */
    protected $view;

    /**
     * PlainText constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function render()
    {
        return $this->text;
    }
}