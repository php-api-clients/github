<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnerGroupsForOrgOperation;

final class RunnerGroups
{
    function get($org, int $per_page = 30, int $page = 1): ListSelfHostedRunnerGroupsForOrgOperation
    {
        return new ListSelfHostedRunnerGroupsForOrgOperation($org, $per_page, $page);
    }

    function post($org): CreateSelfHostedRunnerGroupForOrgOperation
    {
        return new CreateSelfHostedRunnerGroupForOrgOperation($org);
    }
}
