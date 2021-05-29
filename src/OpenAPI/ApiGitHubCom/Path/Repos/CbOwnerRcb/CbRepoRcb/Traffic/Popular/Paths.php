<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPathsOperation;

final class Paths
{
    function get($owner, $repo): GetTopPathsOperation
    {
        return new GetTopPathsOperation($owner, $repo);
    }
}
