<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use Deg540\PHPTestingBoilerplate\OhceKata;
use PHPUnit\Framework\TestCase;

final class OhceKataTest extends TestCase
{
    public OhceKata $ohce;

    /**
     * @setUp
     **/
    protected function setUp():void
    {
        parent::setUp();

        $this->ohce = new OhceKata("Pedro");
    }

    /**
     * @test
     **/
    public function given_one_word_if_is_palindrome_returns_pretty_word()
    {
        $result = $this->ohce->execute('somos');

        $this->assertEquals("somos ¡Bonita palabra!",$result);
    }

    /**
     * @test
     **/
    public function given_oche_rule_returns_goodmorning()
    {
        $result = $this->ohce->execute('ohce');

        $this->assertEquals("¡Buenos dias Pedro!",$result);
    }

    /**
     * @test
     **/
    public function given_stop_rule_returns_a_goodbye()
    {
        $result = $this->ohce->execute('Stop!');

        $this->assertEquals("Adios Pedro",$result);
    }


}