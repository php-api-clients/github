<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Repository as BaseRepository;

class Repository extends BaseRepository
{
    public function refresh() : Repository
    {
        return $this->wait($this->callAsync('refresh'));
    }

    public function labels() : array
    {
        return [];//$this->wait($this->$this->callAsync('labels'));
    }
}
