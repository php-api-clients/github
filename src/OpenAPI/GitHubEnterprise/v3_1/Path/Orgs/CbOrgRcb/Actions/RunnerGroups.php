<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateSelfHostedRunnerGroupForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnerGroupsForOrg;

final class RunnerGroups
{
    function get($org, int $per_page = 30, int $page = 1): ListSelfHostedRunnerGroupsForOrg
    {
        return new ListSelfHostedRunnerGroupsForOrg($org, $per_page, $page);
    }

    function post($org): CreateSelfHostedRunnerGroupForOrg
    {
        return new CreateSelfHostedRunnerGroupForOrg($org);
    }
}
