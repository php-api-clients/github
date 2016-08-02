<?php declare(strict_types=1);

namespace ApiClients\Github\Resource\Sync;

use ApiClients\Github\Resource\Repository as BaseRepository;
class Repository extends BaseRepository
{
    public function refresh() : Repository
    {
        return $this->wait($this->callAsync('refresh'));
    }
}
