<?php

namespace Burger\Aggregate;

// an object that identifies an Aggregate
// should be a value object
interface IdentifiesAggregate
{
    // creates a value object from a string representation
    public static function fromString($string) : IdentifiesAggregate;

    // returns a string that can be parsed by fromString()
    public function __toString() : string;

    // compares the object to another IdentifiesAggregate object
    // returns true if both have the same type and value
    public function equals(IdentifiesAggregate $other) : bool;
}
 