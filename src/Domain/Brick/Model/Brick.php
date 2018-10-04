<?php

namespace App\Domain\Brick\Model;


use App\Domain\Brick\ValueObject\BrickId;
use App\Domain\Common\ValueObject\AggregateRoot;

/**
 * Class Brick
 * @package App\Domain\Brick\Model
 */
final class Brick extends AggregateRoot
{
    /**
     * @var array
     */
    private $properties;

    /**
     * Brick constructor.
     * @param BrickId $brickId
     * @param array $properties
     */
    private function __construct(BrickId $brickId, array $properties)
    {
        parent::__construct($brickId);
        $this->properties = $properties;
    }

    /**
     * @param BrickId $brickId
     * @param BrickProperty[] $properties
     * @return Brick
     */
    public static function create(BrickId $brickId, array $properties) : self
    {
        return new self($brickId, $properties);
    }

    /**
     * @return int
     */
    public function countProperties() : int
    {
        return \count($this->properties);
    }

}