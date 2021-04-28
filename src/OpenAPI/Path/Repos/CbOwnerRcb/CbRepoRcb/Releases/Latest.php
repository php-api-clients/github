<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetLatestReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetLatestReleaseOperation($owner, $repo);
    }
}
