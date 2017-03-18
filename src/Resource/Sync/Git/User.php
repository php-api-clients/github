<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Git;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Git\User as BaseUser;
use ApiClients\Client\Github\Resource\Git\UserInterface;

class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (UserInterface $user) {
            return $user->refresh();
        }));
    }
}
