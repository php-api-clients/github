<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepoOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepoOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepoOperation;

final class InteractionLimits
{
    function get($owner, $repo): GetRestrictionsForRepoOperation
    {
        return new GetRestrictionsForRepoOperation($owner, $repo);
    }

    function put($owner, $repo): SetRestrictionsForRepoOperation
    {
        return new SetRestrictionsForRepoOperation($owner, $repo);
    }

    function delete($owner, $repo): RemoveRestrictionsForRepoOperation
    {
        return new RemoveRestrictionsForRepoOperation($owner, $repo);
    }
}
