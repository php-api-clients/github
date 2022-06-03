<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

final class CbShaRcb
{
    function post($owner, $repo, $sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitStatus($owner, $repo, $sha);
    }
}
