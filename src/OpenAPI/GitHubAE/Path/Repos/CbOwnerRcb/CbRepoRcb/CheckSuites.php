<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckSuites
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuiteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuiteOperation($owner, $repo);
    }
}
