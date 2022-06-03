<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class License
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses\GetForRepo($owner, $repo);
    }
}
