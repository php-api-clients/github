<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\PullRequest;

use ApiClients\Client\Github\Resource\Repository\PullRequest\Rb as BaseRb;
use Exception;

class Rb extends BaseRb
{
    public function refresh(): Rb
    {
        throw new Exception('TODO: create refresh method!');
    }
}
