<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git\Ref;

use ApiClients\Client\Github\Resource\Git\Ref\Object_ as BaseObject_;
use ApiClients\Client\Github\Resource\Git\Ref\Object_Interface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Object_ extends BaseObject_
{
    public function refresh(): Object_
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (Object_Interface $object) {
            return $object->refresh();
        }));
    }
}
