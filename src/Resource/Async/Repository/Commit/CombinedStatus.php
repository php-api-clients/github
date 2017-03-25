<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatus as BaseCombinedStatus;

class CombinedStatus extends BaseCombinedStatus
{
    public function refresh() : CombinedStatus
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
