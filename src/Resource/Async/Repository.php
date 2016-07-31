<?php

namespace ApiClients\Github\Resource\Async;

use ApiClients\Github\Resource\Repository as BaseRepository;
class Repository extends BaseRepository
{
    public function refresh() : Repository
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
