<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg;

final class CbRepositoryIdRcb
{
    function put($org, $runner_group_id, $repository_id): AddRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new AddRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id, $repository_id);
    }

    function delete($org, $runner_group_id, $repository_id): RemoveRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new RemoveRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id, $repository_id);
    }
}
