<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\CommunityHealth;

use ApiClients\Client\Github\Resource\Repository\CommunityHealth\Files as BaseFiles;

class Files extends BaseFiles
{
    public function refresh() : Files
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
