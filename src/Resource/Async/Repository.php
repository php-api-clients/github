<?php

namespace WyriHaximus\Github\Resource\Async;

use WyriHaximus\Github\Resource\Repository as BaseRepository;
class Repository extends BaseRepository
{
    public function refresh() : Repository
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
