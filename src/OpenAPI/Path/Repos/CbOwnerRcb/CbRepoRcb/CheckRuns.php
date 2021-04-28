<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckRuns
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Checks\CreateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Checks\CreateOperation($owner, $repo);
    }
}
