<?php

namespace Iserter\LaravelForms;


use Iserter\LaravelForms\Concerns\HasAttributes;

abstract class Element
{
    use HasAttributes;

    protected $view;
    protected $theme = 'default';


    /**
     * @return mixed
     */
    function render()
    {
        if(empty($view)) {
            return '';
        }

        if(view()->exists('laravel-forms::'.$this->theme.'.' . $this->view)) {
            return view('laravel-forms::'.$this->theme.'.' . $this->view, ['e' => $this])->render();
        }

        return view('laravel-forms::default.' . $this->view, ['e' => $this])->render();
    }

    /*
    |--------------------------------------------------------------------------
    | Getters & Setters
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param mixed $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }



    /*
    |--------------------------------------------------------------------------
    | Magic Methods
    |--------------------------------------------------------------------------
    |
    */

    /**
     * @return mixed
     */
    function __toString()
    {
        return $this->render();
    }
}