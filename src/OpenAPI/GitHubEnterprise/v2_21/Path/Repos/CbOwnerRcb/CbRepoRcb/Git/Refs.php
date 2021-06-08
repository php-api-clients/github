<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\CreateRef;

final class Refs
{
    function post($owner, $repo): CreateRef
    {
        return new CreateRef($owner, $repo);
    }
}
