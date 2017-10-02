<?php

namespace Iserter\LaravelForms\Concerns;

trait Bootstrap4 {

    protected $help;
    protected $size;


    /**
     * @return mixed
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * @param mixed $help
     */
    public function setHelp($help)
    {
        $this->help = $help;
    }

    
    public function getSize()
    {

    }

    public function setSize($size)
    {
        if(!in_array($size,['normal','large','small','lg','sm'])) {
            throw new \Exception('Invalid size parameter');
        }

        // @todo
    }


}