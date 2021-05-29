<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\GetEvent;

final class CbEventIdRcb
{
    function get($owner, $repo, $event_id): GetEvent
    {
        return new GetEvent($owner, $repo, $event_id);
    }
}
