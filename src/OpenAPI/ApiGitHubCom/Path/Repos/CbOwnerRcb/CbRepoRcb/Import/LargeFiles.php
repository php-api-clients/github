<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Import;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetLargeFilesOperation;

final class LargeFiles
{
    function get($owner, $repo): GetLargeFilesOperation
    {
        return new GetLargeFilesOperation($owner, $repo);
    }
}
