<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Transfer
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Transfer
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Transfer($owner, $repo);
    }
}
