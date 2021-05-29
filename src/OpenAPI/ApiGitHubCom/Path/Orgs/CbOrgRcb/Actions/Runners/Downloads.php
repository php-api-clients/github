<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrgOperation;

final class Downloads
{
    function get($org): ListRunnerApplicationsForOrgOperation
    {
        return new ListRunnerApplicationsForOrgOperation($org);
    }
}
