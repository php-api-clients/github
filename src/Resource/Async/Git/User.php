<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\User as BaseUser;

class User extends BaseUser
{
    public function refresh(): User
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
