<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckSuites
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuite($owner, $repo);
    }
}
