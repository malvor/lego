<?php
namespace App\Domain\Brick\Model;


use App\Domain\Brick\ValueObject\BrickPropertyId;
use App\Domain\Brick\ValueObject\BrickPropertyType;
use App\Domain\Common\ValueObject\AggregateRoot;
use App\Domain\Common\ValueObject\AggregateRootId;

class BrickProperty extends AggregateRoot
{

    /**
     * @var AggregateRootId
     */
    protected $uuid;

    /**
     * @var BrickPropertyType
     */
    private $type;

    /**
     * @var string
     */
    private $value;


    protected function __construct(AggregateRootId $aggregateRootId, BrickPropertyType $type, string $value)
    {
        parent::__construct($aggregateRootId);
        $this->type = $type;
        $this->value = $value;
    }

    public static function create(BrickPropertyId $id, BrickPropertyType $type, string $value) : self
    {
        return new self($id, $type, $value);
    }

    public function __toString(): string
    {
        return $this->value;
    }

}