<?php

namespace WyriHaximus\Github\Resource\Sync;

use WyriHaximus\ApiClient\Resource\CallAsyncTrait;
use WyriHaximus\Github\Resource\User as BaseUser;

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
