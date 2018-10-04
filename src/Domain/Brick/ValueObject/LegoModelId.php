<?php
declare(strict_types = 1);

namespace App\Domain\Brick\ValueObject;

use App\Domain\Common\ValueObject\AggregateRootId;

final class LegoModelId extends AggregateRootId
{
    public function __construct(?string $id = null)
    {
        parent::__construct($id);
    }
}