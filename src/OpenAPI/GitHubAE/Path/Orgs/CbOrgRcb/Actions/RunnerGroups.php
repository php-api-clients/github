<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrg;

final class RunnerGroups
{
    function post($org): CreateSelfHostedRunnerGroupForOrg
    {
        return new CreateSelfHostedRunnerGroupForOrg($org);
    }
}
