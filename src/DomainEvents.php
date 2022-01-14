<?php

namespace Burger\Aggregate;

// immutable array of domain events
class DomainEvents extends ImmutableArray
{
    protected function guardType($item)
    {
        if (!($item instanceof DomainEvent)) {
            throw new ArrayIsImmutable;
        }
    }
}