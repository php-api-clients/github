<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\CreateBlobOperation;

final class Blobs
{
    function post($owner, $repo): CreateBlobOperation
    {
        return new CreateBlobOperation($owner, $repo);
    }
}
