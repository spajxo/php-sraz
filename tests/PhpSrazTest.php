<?php

declare(strict_types=1);

namespace Spajxo\PhpSraz;

use PHPUnit\Framework\TestCase;

class PhpSrazTest extends TestCase
{
    public function testOrderBeer(): void
    {
        $this->expectOutputString('One beer, on the way');
        $phpSraz = new PhpSraz();
        $phpSraz->orderBeer();
    }
}
