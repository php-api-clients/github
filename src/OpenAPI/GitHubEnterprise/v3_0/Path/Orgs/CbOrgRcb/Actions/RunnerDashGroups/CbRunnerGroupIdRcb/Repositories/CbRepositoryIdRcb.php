<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation;

final class CbRepositoryIdRcb
{
    function put($org, $runner_group_id, $repository_id): AddRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new AddRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }

    function delete($org, $runner_group_id, $repository_id): RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation
    {
        return new RemoveRepoAccessToSelfHostedRunnerGroupInOrgOperation($org, $runner_group_id, $repository_id);
    }
}
