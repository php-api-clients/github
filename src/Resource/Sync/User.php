<?php declare(strict_types=1);

namespace ApiClients\Github\Resource\Sync;

use ApiClients\Foundation\Resource\CallAsyncTrait;
use ApiClients\Github\Resource\User as BaseUser;

class User extends BaseUser
{
    use CallAsyncTrait;

    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function repositories(): array
    {
        return $this->wait($this->observableToPromise($this->callAsync('repositories')->toArray()));
    }
}
