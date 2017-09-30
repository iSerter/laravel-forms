<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 01:02
 */

namespace Laravel\Forms\Elements;


/**
 * Class FormElementFactory
 * @author Ilyas Serter <ilyasserter@gmail.com>
 * @package Laravel\Forms\Elements
 */
class Factory
{
    /**
     * @var array
     */
    public static $types = ['Text','TextArea','Hidden','Select','CheckBox','RadioButton','Button'];

    /**
     * @param $type
     * @param array $arguments
     * @return mixed
     */
    public static function make($type, array $arguments)
    {
        $class = __NAMESPACE__ . '\\' . $type;
        if(class_exists($class)) {
            return new $class(...$arguments);
        } else {
            throw new \InvalidArgumentException('Invalid form element type');
        }
    }

}