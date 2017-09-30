<?php
/**
 * Created by PhpStorm.
 * User: iSerter
 * Date: 30/09/17
 * Time: 21:01
 */

namespace Laravel\Forms;


/**
 * Class Facade
 * @package Laravel\Forms
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