<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRefOperation;

final class CbRefRcb
{
    function get($owner, $repo, $ref): GetRefOperation
    {
        return new GetRefOperation($owner, $repo, $ref);
    }
}
