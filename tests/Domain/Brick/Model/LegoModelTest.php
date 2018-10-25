<?php
declare(strict_types = 1);

namespace App\Tests\Domain\Brick\Model;

use App\Domain\Brick\Model\Brick;
use App\Domain\Brick\Model\LegoModel;
use App\Domain\Brick\ValueObject\BrickId;
use App\Domain\Brick\ValueObject\LegoModelId;
use PHPUnit\Framework\TestCase;

class LegoModelTest extends TestCase
{

    public function testCanCreateLegoModel()
    {
        $legoModel = $this->getLegoModel();
        $this->assertInstanceOf(LegoModel::class, $legoModel);
    }

    public function testCanAddABrickToALegoModel()
    {
        $legoModel = $this->getLegoModel();
        $legoModel->addABrick(
            Brick::create(
                new BrickId(),
                []
            )
        );

        $this->assertEquals(1, $legoModel->countBricks());
    }

    public function testCanAddMoreBricksToLegoModel()
    {
        $brick1 = Brick::create(
            new BrickId(),
            []
        );
        $brick2 = Brick::create(
            new BrickId(),
            []
        );
        $legoModel = $this->getLegoModel();
        $legoModel->addABrick($brick1, $brick2, $brick1);
        $this->assertEquals(3, $legoModel->countBricks());
    }

    private function getLegoModel() : LegoModel
    {
        return LegoModel::create(
            new LegoModelId()
        );
    }
}
