<?php
namespace App\Domain\Brick\ValueObject;

use App\Domain\Common\ValueObject\AggregateRootId;

class BrickId extends AggregateRootId
{
    public function __construct(?string $id = null)
    {
        parent::__construct($id);
    }
}