<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateTagOperation;

final class Tags
{
    function post($owner, $repo): CreateTagOperation
    {
        return new CreateTagOperation($owner, $repo);
    }
}
