<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\Status as BaseStatus;

class Status extends BaseStatus
{
    public function refresh() : Status
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
