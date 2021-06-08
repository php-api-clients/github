<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateDispatchEvent;

final class Dispatches
{
    function post($owner, $repo): CreateDispatchEvent
    {
        return new CreateDispatchEvent($owner, $repo);
    }
}
