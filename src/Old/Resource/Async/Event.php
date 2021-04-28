<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Event as BaseEvent;

class Event extends BaseEvent
{
    public function refresh(): Event
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
