<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

final class Authors
{
    function get($owner, $repo, $since) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetCommitAuthors($owner, $repo, $since);
    }
}
