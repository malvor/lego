<?php
declare(strict_types = 1);

namespace App\Domain\Common\ValueObject;

abstract class AggregateRoot {

	/**
	 * @var AggregateRootId
	 */
	protected $uuid;

	/**
	 * AggregateRoot constructor.
	 * @param AggregateRootId $aggregateRootId AggregateRootId instance
	 */
	protected function __construct(AggregateRootId $aggregateRootId) {
		$this->uuid = $aggregateRootId;
	}

	public function uuid() : AggregateRootId {
		return $this->uuid;
	}

	/**
	 * @param AggregateRootId $aggregateRootId AggregateRootId instance
	 * @return bool
	 */
	final public function equals(AggregateRootId $aggregateRootId) : bool {
		return $this->uuid->equals($aggregateRootId);
	}

	public function __toString(): string {
		return (string)$this->uuid;
	}

}