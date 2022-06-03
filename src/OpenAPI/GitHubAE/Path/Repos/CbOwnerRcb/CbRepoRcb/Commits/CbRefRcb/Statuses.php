<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class Statuses
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitStatusesForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitStatusesForRef($owner, $repo, $ref, $per_page, $page);
    }
}
