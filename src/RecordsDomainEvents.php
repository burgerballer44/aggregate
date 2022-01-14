<?php

namespace Burger\Aggregate;

// this trait will satisfy the RecordsEvent interface
trait RecordsDomainEvents
{
    private $recordedEvents = [];

    public function getRecordedEvents() : DomainEvents
    {
        return new DomainEvents($this->recordedEvents);
    }

    public function clearRecordedEvents()
    {
        $this->recordedEvents = [];
    }
}