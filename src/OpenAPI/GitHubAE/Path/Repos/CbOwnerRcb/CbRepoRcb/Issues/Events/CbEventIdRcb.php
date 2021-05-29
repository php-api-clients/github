<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetEventOperation;

final class CbEventIdRcb
{
    function get($owner, $repo, $event_id): GetEventOperation
    {
        return new GetEventOperation($owner, $repo, $event_id);
    }
}
