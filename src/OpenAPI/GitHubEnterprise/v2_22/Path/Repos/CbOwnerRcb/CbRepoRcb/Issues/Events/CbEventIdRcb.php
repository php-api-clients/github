<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events;

final class CbEventIdRcb
{
    function get($owner, $repo, $event_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetEvent
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues\GetEvent($owner, $repo, $event_id);
    }
}
