<?php

namespace Burger\Aggregate;

// object that can be reconstituted from an AggregateHistory
// use this when the entity is event sourced
interface IsEventSourced
{
    public static function reconstituteFromEvents(AggregateHistory $aggregateHistory) : RecordsEvents;
}
 