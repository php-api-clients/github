<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg;

final class InteractionLimits
{
    function get($org): GetRestrictionsForOrg
    {
        return new GetRestrictionsForOrg($org);
    }

    function put($org): SetRestrictionsForOrg
    {
        return new SetRestrictionsForOrg($org);
    }

    function delete($org): RemoveRestrictionsForOrg
    {
        return new RemoveRestrictionsForOrg($org);
    }
}
