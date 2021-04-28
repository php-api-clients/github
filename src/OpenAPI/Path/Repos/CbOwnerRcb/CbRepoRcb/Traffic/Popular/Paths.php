<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

final class Paths
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTopPathsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTopPathsOperation($owner, $repo);
    }
}
