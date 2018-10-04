<?php
namespace App\Tests\Domain\Brick\Model;

use App\Domain\Brick\Model\BrickProperty;

use App\Domain\Brick\ValueObject\BrickPropertyId;
use App\Domain\Brick\ValueObject\BrickPropertyType;
use PHPUnit\Framework\TestCase;

class BrickPropertyTest extends TestCase
{
    public function testConstructBrickPropertyObject()
    {
        $value = 'Value';
        $brickProperty = BrickProperty::create(
            new BrickPropertyId(),
            BrickPropertyType::createType1(),
            $value
        );

        $this->assertInstanceOf(BrickProperty::class, $brickProperty);
        $this->assertEquals($value, (string)$brickProperty);
    }
}
