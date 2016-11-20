<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\User as BaseUser;

class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
