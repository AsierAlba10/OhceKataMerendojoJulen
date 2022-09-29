<?php

namespace Deg540\PHPTestingBoilerplate;

class OhceKata {

    private string $name;

    /**
     * OhceKata constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    private function reverse(string $word): string {
        return strrev($word);
    }

    private function isPalindrome(string $word): bool {
        return $word === $this->reverse($word);
    }

    private function isOhceRule(string $word): bool {
        return (strcmp($word, "ohce") == 0);
    }

    private function isStopRule(string $word): bool {
        return (strcmp($word, "Stop!") == 0);
    }

    public function execute(string $wordToTransform): string
    {
        $reverseWord = $this->reverse($wordToTransform);

        if($this->isOhceRule($wordToTransform)){
            return "¡Buenos dias " . $this->name . "!";
        }

        if($this->isStopRule($wordToTransform)){
            return "Adios " . $this->name;
        }

        if($this->isPalindrome($wordToTransform)) {
            return $reverseWord . " ¡Bonita palabra!";
        }

        return $reverseWord;
    }

}