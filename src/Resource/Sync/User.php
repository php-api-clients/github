<?php

namespace WyriHaximus\Github\Resource\Sync;

use WyriHaximus\Github\Resource\User as BaseUser;
class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
