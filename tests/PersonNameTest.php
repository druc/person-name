<?php

namespace Druc\PersonName;

use PHPUnit\Framework\TestCase;

class PersonNameTest extends TestCase
{
    /** @var PersonName */
    private $name;

    public function setUp()
    {
        parent::setUp();
        $this->name = PersonName::make('Constantin Druc Pinsmile');
    }

    public function testGetFull()
    {
        $this->assertEquals('Constantin Druc Pinsmile', $this->name->full);
    }

    public function testGetFirst()
    {
        $this->assertEquals('Constantin', $this->name->first);
    }

    public function testGetLast()
    {
        $this->assertEquals('Druc Pinsmile', $this->name->last);
    }

    public function testGetInitials()
    {
        $this->assertEquals('CDP', $this->name->initials);
    }

    public function testGetFamiliar()
    {
        $this->assertEquals('Constantin D.', $this->name->familiar);
    }

    public function testGetAbbreviated()
    {
        $this->assertEquals('C. Druc Pinsmile', $this->name->abbreviated);
    }

    public function testGetSorted()
    {
        $this->assertEquals('Druc Pinsmile, Constantin', $this->name->sorted);
    }

    public function testGetMentionable()
    {
        $this->assertEquals('constantind', $this->name->mentionable);
    }

    public function testGetPossessive()
    {
        $this->assertEquals('Constantin Druc Pinsmile\'s', $this->name->possessive);
    }
    
    public function testGetPossessiveEndingInS()
    {
        $this->name = PersonName::make('Constantin Druc Pinsmiles');
        $this->assertEquals('Constantin Druc Pinsmiles\'', $this->name->possessive);
    }
}
