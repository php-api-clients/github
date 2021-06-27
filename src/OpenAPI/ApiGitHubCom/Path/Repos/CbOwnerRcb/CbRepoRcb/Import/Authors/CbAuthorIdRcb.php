<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors;

final class CbAuthorIdRcb
{
    function patch($owner, $repo, $author_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\MapCommitAuthor($owner, $repo, $author_id);
    }
}
