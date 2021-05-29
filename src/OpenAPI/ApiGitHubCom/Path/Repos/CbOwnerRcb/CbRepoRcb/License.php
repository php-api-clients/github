<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Licenses\GetForRepo;

final class License
{
    function get($owner, $repo): GetForRepo
    {
        return new GetForRepo($owner, $repo);
    }
}
