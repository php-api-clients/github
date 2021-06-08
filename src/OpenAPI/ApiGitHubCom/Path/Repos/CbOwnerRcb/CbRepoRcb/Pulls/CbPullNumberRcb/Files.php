<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles;

final class Files
{
    function get($owner, $repo, $pull_number, int $per_page = 30, int $page = 1): ListFiles
    {
        return new ListFiles($owner, $repo, $pull_number, $per_page, $page);
    }
}
