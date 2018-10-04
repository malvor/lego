<?php
declare(strict_types = 1);

namespace App\Domain\Common\ValueObject;

use App\Domain\Common\Exception\InvalidUUIDException;
use Ramsey\Uuid\Uuid;

abstract class AggregateRootId {

	/**
	 * @var string
	 */
	protected $uuid;

    /**
     * AggregateRootId constructor.
     * @param null|string $id
     * @throws \Exception
     */
	public function __construct( ? string $id = null) {
		try {
			$this->uuid = Uuid::fromString($id ?: (string)Uuid::uuid4())->toString();
		} catch (\InvalidArgumentException $e) {
			throw new InvalidUUIDException();
		}
	}

	/**
	 * Check is aggregate equals
	 *
	 * @param AggregateRootId $aggregateRootId AggregateRootId instance
	 *
	 * @return bool
	 */
	public function equals(AggregateRootId $aggregateRootId) : bool {
		return $this->uuid === $aggregateRootId->__toString();
	}

	/**
	 * @return string
	 */
	public function bytes() : string {
		return Uuid::fromString($this->uuid)->getBytes();
	}

    /**
     * @param string $bytes
     * @return AggregateRootId
     * @throws \Exception
     */
	public static function fromBytes(string $bytes) : self {
		return new static(Uuid::fromBytes($bytes)->toString());
	}

    /**
     * @param string $uid
     * @return string
     * @throws \Exception
     */
	public static function toBytes(string $uid) : string {
		return (new static($uid))->bytes();
	}

	/**
	 * @return string
	 */
	public function __toString() : string {
		return (string)$this->uuid;
	}
}