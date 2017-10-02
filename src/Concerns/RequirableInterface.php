<?php

namespace Iserter\LaravelForms\Concerns;


interface RequirableInterface
{
    public function isRequired();

    public function setRequired();
}