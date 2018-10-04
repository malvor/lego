<?php
declare(strict_types = 1);

namespace App\Tests\Domain\Brick\Model;

use App\Domain\Brick\Model\Brick;

use App\Domain\Brick\Model\BrickProperty;
use App\Domain\Brick\ValueObject\BrickId;
use App\Domain\Brick\ValueObject\BrickPropertyId;
use App\Domain\Brick\ValueObject\BrickPropertyType;
use PHPUnit\Framework\TestCase;

/**
 * Class BrickTest
 * @package App\Tests\Domain\Brick\Model
 */
class BrickTest extends TestCase
{
    /**
     *
     */
    public function testConstructBrickObject()
    {
        $brick = $this->getBrickWithoutProperty();
        $this->assertInstanceOf(Brick::class, $brick);
    }

    /**
     * @throws \Exception
     */
    public function testCanCreateBrickWithAProperty()
    {
        $brick = Brick::create(
            new BrickId(),
            [
                BrickProperty::create(
                    new BrickPropertyId(),
                    BrickPropertyType::createType1(),
                    'Value'
                )
            ]
        );
        $this->assertEquals(1, $brick->countProperties());
    }

    /**
     *
     */
    public function testCanCreateBrickWithoutProperty()
    {
        $brick = $this->getBrickWithoutProperty();
        $this->assertEquals(0, $brick->countProperties());
    }

    /**
     * @return Brick
     * @throws \Exception
     */
    private function getBrickWithoutProperty() : Brick
    {
        return  Brick::create(
            new BrickId(),
            []
        );
    }
}
