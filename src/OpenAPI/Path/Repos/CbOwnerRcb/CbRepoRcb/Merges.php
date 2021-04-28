<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Merges
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\MergeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\MergeOperation($owner, $repo);
    }
}
