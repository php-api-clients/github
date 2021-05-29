<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrersOperation;

final class Referrers
{
    function get($owner, $repo): GetTopReferrersOperation
    {
        return new GetTopReferrersOperation($owner, $repo);
    }
}
