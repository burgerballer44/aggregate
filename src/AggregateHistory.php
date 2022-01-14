<?php

namespace Burger\Aggregate;

use Burger\Aggregate\CorruptAggregateHistory;
use Burger\Aggregate\IdentifiesAggregate;

// immutable array of domain events
// intended to be used when retrieving an event sourced object
final class AggregateHistory extends DomainEvents
{
    private $aggregateId;

    public function __construct(IdentifiesAggregate $aggregateId, array $events)
    {
        foreach ($events as $event) {
            if (!$event->getAggregateId()->equals($aggregateId)) {
                throw new CorruptAggregateHistory;
            }
        }
        parent::__construct($events);
        $this->aggregateId = $aggregateId;
    }

    public function getAggregateId() : IdentifiesAggregate
    {
        return $this->aggregateId;
    }
}