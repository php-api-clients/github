<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Git\CreateBlob;

final class Blobs
{
    function post($owner, $repo): CreateBlob
    {
        return new CreateBlob($owner, $repo);
    }
}
