<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEventOperation;

final class Dispatches
{
    function post($owner, $repo): CreateDispatchEventOperation
    {
        return new CreateDispatchEventOperation($owner, $repo);
    }
}
