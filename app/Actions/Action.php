<?php

namespace App\Actions;

abstract class Action
{
    public static function create(): static
    {
        return new static();
    }
}