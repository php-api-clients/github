<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class CheckRuns
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create($owner, $repo);
    }
}
