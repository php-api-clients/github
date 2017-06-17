<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Repository\Release as BaseRelease;

class Release extends BaseRelease
{
    public function refresh(): Release
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
