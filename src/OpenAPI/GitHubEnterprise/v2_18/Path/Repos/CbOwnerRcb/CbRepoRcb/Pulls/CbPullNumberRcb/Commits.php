<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\ListCommitsOperation;

final class Commits
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListCommitsOperation
    {
        return new ListCommitsOperation($owner, $repo, $pull_number, $per_page, $page);
    }
}
