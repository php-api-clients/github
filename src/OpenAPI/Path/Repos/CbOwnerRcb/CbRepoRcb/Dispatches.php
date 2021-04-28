<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Dispatches
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateDispatchEventOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateDispatchEventOperation($owner, $repo);
    }
}
