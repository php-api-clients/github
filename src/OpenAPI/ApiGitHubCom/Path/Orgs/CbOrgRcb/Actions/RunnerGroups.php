<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrgOperation;

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
