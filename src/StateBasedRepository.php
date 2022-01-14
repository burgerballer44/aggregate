<?php

namespace Burger\Aggregate;

// repository for aggregates
// this repositry should be able to get the current state of an aggregate and update it
interface StateBasedRepository
{
    public function get(IdentifiesAggregate $aggregateId) : IsStateBased;
    public function add(RecordsEvents $aggregate);
}