<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\Operation\Git\GetRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\GetRefOperation($owner, $repo, $ref);
    }
}
