<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Community;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics;

final class Profile
{
    function get($owner, $repo): GetCommunityProfileMetrics
    {
        return new GetCommunityProfileMetrics($owner, $repo);
    }
}
