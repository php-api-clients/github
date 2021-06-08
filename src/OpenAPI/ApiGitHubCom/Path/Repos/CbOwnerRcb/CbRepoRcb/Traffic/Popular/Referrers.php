<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers;

final class Referrers
{
    function get($owner, $repo): GetTopReferrers
    {
        return new GetTopReferrers($owner, $repo);
    }
}
