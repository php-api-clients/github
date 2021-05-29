<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetAllTopicsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ReplaceAllTopicsOperation;

final class Topics
{
    function get($owner, $repo, int $page = 1, int $per_page = 30): GetAllTopicsOperation
    {
        return new GetAllTopicsOperation($owner, $repo, $page, $per_page);
    }

    function put($owner, $repo): ReplaceAllTopicsOperation
    {
        return new ReplaceAllTopicsOperation($owner, $repo);
    }
}
