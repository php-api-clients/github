<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Event as BaseEvent;
use ApiClients\Client\Github\Resource\EventInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Event extends BaseEvent
{
    public function refresh(): Event
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (EventInterface $event) {
            return $event->refresh();
        }));
    }
}
