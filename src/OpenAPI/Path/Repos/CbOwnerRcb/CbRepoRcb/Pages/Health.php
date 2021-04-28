<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pages;

final class Health
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPagesHealthCheckOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetPagesHealthCheckOperation($owner, $repo);
    }
}
