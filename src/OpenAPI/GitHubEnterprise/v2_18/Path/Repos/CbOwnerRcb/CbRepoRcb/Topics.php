<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetAllTopics;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ReplaceAllTopics;

final class Topics
{
    function get($owner, $repo, int $page = 1, int $per_page = 30): GetAllTopics
    {
        return new GetAllTopics($owner, $repo, $page, $per_page);
    }

    function put($owner, $repo): ReplaceAllTopics
    {
        return new ReplaceAllTopics($owner, $repo);
    }
}
