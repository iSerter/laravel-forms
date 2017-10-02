<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 02/10/17
 * Time: 23:03
 */

namespace Iserter\LaravelForms\Concerns;


use Iserter\LaravelForms\Element;

trait HasElements
{
    protected $elements = [];

    /**
     * @param Element $element
     * @return $this
     */
    public function addElement(Element $element)
    {
        $this->elements[] = $element;
        return $this;
    }

    /**
     * @param Element[] $elements
     * @return $this
     */
    public function addElements(Element ...$elements)
    {
        foreach($elements as $element) {
            $this->elements[] = $element;
        }
        return $this;
    }

    /**
     * Alias to getElements()
     *
     * @return array
     */
    public function elements()
    {
        return $this->getElements();
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     */
    public function setElements(array $elements)
    {
        $this->elements = $elements;
    }


}