<?php

namespace App\Domain\Brick\Model;


use App\Domain\Common\ValueObject\AggregateRoot;

final class Brick extends AggregateRoot
{
    private function __construct()
    {
    }

    public static function create() : self
    {

    }
}