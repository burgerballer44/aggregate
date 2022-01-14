<?php

namespace Burger\Aggregate;

// repository for aggregates
// this repositry should be able to get all events for an aggregate and add new events
interface EventSourcedRepository
{
    public function get(IdentifiesAggregate $aggregateId) : IsEventSourced;
    public function add(RecordsEvents $aggregate);
}