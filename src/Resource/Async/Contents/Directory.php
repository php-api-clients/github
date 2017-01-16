<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Contents\Directory as BaseDirectory;

class Directory extends BaseDirectory
{
    public function refresh() : Directory
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
