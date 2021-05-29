<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrgOperation;

final class Repositories
{
    function get($org, $runner_group_id, int $page = 1, int $per_page = 30): ListRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new ListRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $page, $per_page);
    }

    function put($org, $runner_group_id): SetRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new SetRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id);
    }
}
