<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateRefOperation;

final class Refs
{
    function post($owner, $repo): CreateRefOperation
    {
        return new CreateRefOperation($owner, $repo);
    }
}
