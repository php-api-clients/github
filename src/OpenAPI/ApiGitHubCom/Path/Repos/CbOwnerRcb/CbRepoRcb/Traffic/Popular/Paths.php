<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths;

final class Paths
{
    function get($owner, $repo): GetTopPaths
    {
        return new GetTopPaths($owner, $repo);
    }
}
