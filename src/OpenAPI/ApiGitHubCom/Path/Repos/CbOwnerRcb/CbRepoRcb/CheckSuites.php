<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckSuites
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite($owner, $repo);
    }
}
