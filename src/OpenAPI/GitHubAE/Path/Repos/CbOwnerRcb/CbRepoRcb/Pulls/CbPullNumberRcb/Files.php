<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\ListFilesOperation;

final class Files
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListFilesOperation
    {
        return new ListFilesOperation($owner, $repo, $pull_number, $per_page, $page);
    }
}
