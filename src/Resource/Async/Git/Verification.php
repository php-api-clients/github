<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Git\Verification as BaseVerification;

class Verification extends BaseVerification
{
    public function refresh(): Verification
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
