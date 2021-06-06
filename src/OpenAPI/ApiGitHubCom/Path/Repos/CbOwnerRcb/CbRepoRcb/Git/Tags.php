<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Tags
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag($owner, $repo);
    }
}
