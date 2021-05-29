<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrgOperation;

final class InteractionLimits
{
    function get($org): GetRestrictionsForOrgOperation
    {
        return new GetRestrictionsForOrgOperation($org);
    }

    function put($org): SetRestrictionsForOrgOperation
    {
        return new SetRestrictionsForOrgOperation($org);
    }

    function delete($org): RemoveRestrictionsForOrgOperation
    {
        return new RemoveRestrictionsForOrgOperation($org);
    }
}
