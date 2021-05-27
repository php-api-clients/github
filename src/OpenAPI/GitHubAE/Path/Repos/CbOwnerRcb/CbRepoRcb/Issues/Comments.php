<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

final class Comments
{
    function get($owner, $repo, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListCommentsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListCommentsForRepoOperation($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
