<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 21:01
 */

namespace Iserter\LaravelForms;


/**
 * Class Facade
 * @package Iserter\LaravelForms
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return Form::class;
    }
}