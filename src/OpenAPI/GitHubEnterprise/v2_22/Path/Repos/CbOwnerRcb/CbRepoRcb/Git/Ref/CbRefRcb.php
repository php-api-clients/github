<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Git\GetRef;

final class CbRefRcb
{
    function get($owner, $repo, $ref): GetRef
    {
        return new GetRef($owner, $repo, $ref);
    }
}
