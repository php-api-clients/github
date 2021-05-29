<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrgOperation;

final class CbRunnerIdRcb
{
    function put($org, $runner_group_id, $runner_id): AddSelfHostedRunnerToGroupForOrgOperation
    {
        return new AddSelfHostedRunnerToGroupForOrgOperation($org, $runner_group_id, $runner_id);
    }

    function delete($org, $runner_group_id, $runner_id): RemoveSelfHostedRunnerFromGroupForOrgOperation
    {
        return new RemoveSelfHostedRunnerFromGroupForOrgOperation($org, $runner_group_id, $runner_id);
    }
}
