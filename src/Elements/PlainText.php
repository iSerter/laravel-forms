<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 02/10/17
 * Time: 23:53
 */

namespace Iserter\LaravelForms\Elements;


use Iserter\LaravelForms\Element;

class PlainText extends Element
{
    protected $text;

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

    public function render()
    {
        return $this->text;
    }
}