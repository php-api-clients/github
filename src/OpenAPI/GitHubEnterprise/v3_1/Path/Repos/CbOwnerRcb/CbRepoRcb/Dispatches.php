<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDispatchEvent;

final class Dispatches
{
    function post($owner, $repo): CreateDispatchEvent
    {
        return new CreateDispatchEvent($owner, $repo);
    }
}
