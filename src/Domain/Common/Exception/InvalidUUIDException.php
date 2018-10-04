<?php
declare(strict_types = 1);

namespace App\Domain\Common\Exception;

final class InvalidUUIDException extends \InvalidArgumentException {

	/**
	 * InvalidUUIDException constructor.
	 */
	public function __construct() {
		parent::__construct("aggregator_root.exception.invalid_uuid", 400);
	}
}