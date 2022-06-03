<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Comments
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitCommentsForRepo($owner, $repo, $per_page, $page);
    }
}
