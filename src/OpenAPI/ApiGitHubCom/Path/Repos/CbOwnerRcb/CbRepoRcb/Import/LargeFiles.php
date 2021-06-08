<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFiles;

final class LargeFiles
{
    function get($owner, $repo): GetLargeFiles
    {
        return new GetLargeFiles($owner, $repo);
    }
}
