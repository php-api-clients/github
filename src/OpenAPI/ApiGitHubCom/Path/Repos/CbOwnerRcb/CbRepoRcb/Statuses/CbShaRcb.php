<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

final class CbShaRcb
{
    function post($owner, $repo, $sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus($owner, $repo, $sha);
    }
}
