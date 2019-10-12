<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\Check as BaseCheck;

class Check extends BaseCheck
{
    public function refresh(): Check
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
