<?php

declare(strict_types=1);

namespace Kreemers\Template\Tests\Unit;

use Kreemers\Template\App;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Kreemers\Template\App
 * @covers ::<!public>
 */
class AppTest extends TestCase
{
    /**
     * @covers ::start
     */
    public function testAppCanStart() : void
    {
        $app = new App();
        $result = $app->start();

        $this->assertEquals(
            'Hello World!',
            $result
        );
    }
}
