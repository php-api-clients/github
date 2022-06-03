<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Commits
{
    function get($owner, $repo, $sha, $path, $author, $since, $until, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListCommits($owner, $repo, $sha, $path, $author, $since, $until, $per_page, $page);
    }
}
