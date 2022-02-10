<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Trees
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTree($owner, $repo);
    }
}
