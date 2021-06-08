<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateTag;

final class Tags
{
    function post($owner, $repo): CreateTag
    {
        return new CreateTag($owner, $repo);
    }
}
