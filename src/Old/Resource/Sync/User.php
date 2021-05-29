<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Async\User as AsyncUser;
use ApiClients\Client\Github\Resource\User as BaseUser;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class User extends BaseUser
{
    public function refresh(): User
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function repository(string $repository): Repository
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(static function (AsyncUser $user) use ($repository) {
                return $user->repository($repository);
            })
        );
    }
}
