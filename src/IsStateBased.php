<?php

namespace Burger\Aggregate;

// object that can be reconstituted from its current state
// use this when the entity is NOT event sourced
interface IsStateBased
{
    public static function reconstituteFromState(CurrentState $state) : RecordsEvents;
}
 