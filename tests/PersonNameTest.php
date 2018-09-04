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

    /** @test */
    public function get_full_name()
    {
        $this->assertEquals('Constantin Druc Pinsmile', $this->name->full);
    }

    /** @test */
    public function get_first_name()
    {
        $this->assertEquals('Constantin', $this->name->first);
    }

    /** @test */
    public function get_last_name()
    {
        $this->assertEquals('Druc Pinsmile', $this->name->last);
    }

    /** @test */
    public function get_name_initials()
    {
        $this->assertEquals('CDP', $this->name->initials);
    }

    /** @test */
    public function get_familiar_name()
    {
        $this->assertEquals('Constantin D.', $this->name->familiar);
    }

    /** @test */
    public function get_abbreviated_name()
    {
        $this->assertEquals('C. Druc Pinsmile', $this->name->abbreviated);
    }

    /** @test */
    public function get_sorted_name()
    {
        $this->assertEquals('Druc Pinsmile, Constantin', $this->name->sorted);
    }

    /** @test */
    public function get_mentionable_name()
    {
        $this->assertEquals('constantind', $this->name->mentionable);
    }

    /** @test */
    public function get_posessive_name()
    {
        $this->assertEquals('Constantin Druc Pinsmile\'s', $this->name->possessive);
    }

    /** @test */
    public function get_posessive_name_ending_in_s()
    {
        $this->name = PersonName::make('Constantin Druc Pinsmiles');
        $this->assertEquals('Constantin Druc Pinsmiles\'', $this->name->possessive);
    }
}
