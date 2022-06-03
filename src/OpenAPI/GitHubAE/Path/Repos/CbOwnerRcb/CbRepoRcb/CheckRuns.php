<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckRuns
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Create($owner, $repo);
    }
}
