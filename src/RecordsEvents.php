<?php

namespace Burger\Aggregate;

// object that records events that happened to it since the last time it was cleared, or since it was restored from persistence
interface RecordsEvents
{
    // gets the latest recorded events
    public function getRecordedEvents() : DomainEvents;

    // clears the record of new Domain Events
    // this does not clear the history of the object
    public function clearRecordedEvents();
}