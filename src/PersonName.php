<?php

namespace Druc\PersonName;

class PersonName
{
    /** @var string */
    public $fullName;

    /**
     * PersonName constructor.
     * @param string $fullName
     */
    private function __construct(string $fullName = '')
    {
        $this->fullName = $fullName;
    }

    /**
     * @param string $fullName
     * @return PersonName
     */
    public static function make(string $fullName)
    {
        return new static($fullName);
    }

    /**
     * @param $property
     * @return null
     */
    public function __get($property)
    {
        if (in_array($property, get_class_methods($this))) {
            return $this->{$property}();
        }

        return null;
    }

    /**
     * @return string
     */
    public function full()
    {
        return $this->fullName;
    }

    /**
     * @return string
     */
    public function first()
    {
        return preg_split('/\s+/', $this->fullName, 2)[0];
    }

    /**
     * @return string
     */
    public function last()
    {
        return preg_split('/\s+/', $this->fullName, 2)[1];
    }

    /**
     * @return string
     */
    public function initials()
    {
        preg_match_all('/\b(\S)\S*/', $this->fullName, $matches);
        return implode('', $matches[1]);
    }

    /**
     * First name + Last name initial
     * Ex: Constantin Druc Pinsmile -> Constantin D.
     * @return string
     */
    public function familiar()
    {
        return $this->first() . ' ' . substr($this->last(), 0, 1) . '.';
    }

    /**
     * Ex: Constantin Druc Pinsmile -> CDP
     * @return string
     */
    public function abbreviated()
    {
        return substr($this->first, 0, 1) . '. ' . $this->last();
    }

    /**
     * Last name, First name
     * Ex: Constantin Druc Pinsmile -> Druc Pinsmile, Constantin
     * @return string
     */
    public function sorted()
    {
        return $this->last() . ', ' . $this->first();
    }

    /**
     * Lowercase and whitespace striped version of the familiar name
     * @return string
     */
    public function mentionable()
    {
        return rtrim(strtolower(preg_replace('/\s+/', '', $this->familiar())), ". ");
    }

    /**
     * @return string
     */
    public function possessive()
    {
        if (substr($this->last(), -1, 1) !== 's') {
            return $this->fullName . "'s";
        }

        return $this->fullName . "'";
    }
}
