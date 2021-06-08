<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo;

final class InteractionLimits
{
    function get($owner, $repo): GetRestrictionsForRepo
    {
        return new GetRestrictionsForRepo($owner, $repo);
    }

    function put($owner, $repo): SetRestrictionsForRepo
    {
        return new SetRestrictionsForRepo($owner, $repo);
    }

    function delete($owner, $repo): RemoveRestrictionsForRepo
    {
        return new RemoveRestrictionsForRepo($owner, $repo);
    }
}
