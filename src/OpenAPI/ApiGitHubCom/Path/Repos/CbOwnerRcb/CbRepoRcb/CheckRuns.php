<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\Create;

final class CheckRuns
{
    function post($owner, $repo): Create
    {
        return new Create($owner, $repo);
    }
}
