<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\CreateRef;

final class Refs
{
    function post($owner, $repo): CreateRef
    {
        return new CreateRef($owner, $repo);
    }
}
