<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\Create;

final class CheckRuns
{
    function post($owner, $repo): Create
    {
        return new Create($owner, $repo);
    }
}
