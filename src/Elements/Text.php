<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 02/10/17
 * Time: 23:43
 */

namespace Iserter\LaravelForms\Elements;


use Iserter\LaravelForms\Element;

/**
 * Class Text
 * @package Iserter\LaravelForms\Elements
 */
class Text extends Element
{
    /**
     * @var
     */
    protected $text;

    /**
     * @var
     */
    protected $tag;

    /**
     * Text constructor.
     * @param $text
     * @param string $tag
     */
    public function __construct($text,$tag = 'span')
    {

        $this->text = $text;
        $this->tag = $tag;
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
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }
}