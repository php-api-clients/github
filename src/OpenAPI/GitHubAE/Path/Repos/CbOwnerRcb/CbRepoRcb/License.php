<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class License
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepoOperation($owner, $repo);
    }
}
