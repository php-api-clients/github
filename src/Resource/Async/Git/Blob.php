<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\Blob as BaseBlob;

class Blob extends BaseBlob
{
    public function refresh(): Blob
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
