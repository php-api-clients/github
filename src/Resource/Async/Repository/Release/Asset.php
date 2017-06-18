<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Release;

use ApiClients\Client\Github\Resource\Repository\Release\Asset as BaseAsset;

class Asset extends BaseAsset
{
    public function refresh(): Asset
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
