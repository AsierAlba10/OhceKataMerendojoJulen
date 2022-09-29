<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use Deg540\PHPTestingBoilerplate\OhceKata;
use PHPUnit\Framework\TestCase;

final class OhceKataTest extends TestCase
{
    /**
     * @test
     **/
    public function given_one_word_returns_reverse_word()
    {
        $ohce = new OhceKata();

        $result = $ohce->reverse('hello');

        $this->assertEquals("olleh",$result);
    }


}