<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\ListCommits;

final class Commits
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListCommits
    {
        return new ListCommits($owner, $repo, $pull_number, $per_page, $page);
    }
}
