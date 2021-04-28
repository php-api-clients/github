<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events;

final class CbEventIdRcb
{
    function get($owner, $repo, $event_id) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetEventOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\GetEventOperation($owner, $repo, $event_id);
    }
}
