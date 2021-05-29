<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeOperation;

final class Merges
{
    function post($owner, $repo): MergeOperation
    {
        return new MergeOperation($owner, $repo);
    }
}
