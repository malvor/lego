<?php

namespace App\Domain\Brick\ValueObject;


class BrickPropertyType
{
    public const TYPE_1 = 'type_1';
    public const TYPE_2 = 'type_2';


    private $name;

    private function __construct()
    {
    }

    public static function createType1() : self
    {
        $type = new self();
        $type->name = self::TYPE_1;
        return $type;
    }

}