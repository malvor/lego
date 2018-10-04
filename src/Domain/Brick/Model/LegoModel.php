<?php
declare(strict_types = 1);

namespace App\Domain\Brick\Model;

use App\Domain\Brick\ValueObject\LegoModelId;
use App\Domain\Common\ValueObject\AggregateRoot;
use App\Domain\Common\ValueObject\AggregateRootId;

/**
 * Class LegoModel
 * @package App\Domain\Brick\Model
 */
final class LegoModel extends AggregateRoot
{

    /**
     * @var
     */
    private $brickCollection;

    /**
     * LegoModel constructor.
     * @param AggregateRootId $aggregateRootId
     */
    private function __construct(AggregateRootId $aggregateRootId)
    {
        parent::__construct($aggregateRootId);
    }

    /**
     * @param LegoModelId $legoModelId
     * @return LegoModel
     */
    public static function create(LegoModelId $legoModelId) : self
    {
        return new self($legoModelId);
    }

    /**
     * @param Brick $brick
     */
    public function addABrick(Brick $brick) : void
    {
        $this->brickCollection[] = $brick;
    }

    /**
     * @return int
     */
    public function countBricks() : int
    {
        return \count($this->brickCollection);
    }
}