<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg;

final class Repositories
{
    function get($org, $runner_group_id, int $page = 1, int $per_page = 30): ListRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new ListRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id, $page, $per_page);
    }

    function put($org, $runner_group_id): SetRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new SetRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id);
    }
}
