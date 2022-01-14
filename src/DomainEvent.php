<?php

namespace Burger\Aggregate;

// something that happened in the past, that is of importance to the business
interface DomainEvent
{
    // the aggregate this event belongs to
    public function getAggregateId();
}