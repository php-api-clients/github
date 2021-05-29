<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\CreateTreeOperation;

final class Trees
{
    function post($owner, $repo): CreateTreeOperation
    {
        return new CreateTreeOperation($owner, $repo);
    }
}
