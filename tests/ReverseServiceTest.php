<?php
 namespace App\tests;

 use App\Service\ReverseService;
 use PHPUnit\Framework\TestCase;

class ReverseServiceTest extends TestCase
{
    public function testReverse()
    {
        $reverse = new ReverseService();
        $this->assertEquals('La sonmai', $reverse->permutation('La maison'));
        $this->assertEquals('Yavuz est le formateur', $reverse->permutation('Yavuz est le teurforma'));
        $this->assertEquals('La maison pres de la fontaine', $reverse->permutation('La sonmai pres de la ainefont'));
    }
}