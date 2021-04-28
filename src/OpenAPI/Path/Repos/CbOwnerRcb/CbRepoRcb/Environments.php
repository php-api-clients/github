<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Environments
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAllEnvironmentsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAllEnvironmentsOperation($owner, $repo);
    }
}
