<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\GetEvent;

final class CbEventIdRcb
{
    function get($owner, $repo, $event_id): GetEvent
    {
        return new GetEvent($owner, $repo, $event_id);
    }
}
