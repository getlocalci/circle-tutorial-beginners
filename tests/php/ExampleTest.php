<?php

declare(strict_types=1);

namespace GetLocalCI\ExamplePhp;

use PHPUnit\Framework\TestCase;

/**
 * @small
 *
 * @covers \Asw\ExamplePhp
 */
class ExampleTest extends TestCase
{
    public function testMultiply(): void
    {
        $instance = new Example();
        $this->assertEquals(4, $instance->multiply(2, 2));
    }
}
