<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg;

final class CbRunnerIdRcb
{
    function put($org, $runner_group_id, $runner_id): AddSelfHostedRunnerToGroupForOrg
    {
        return new AddSelfHostedRunnerToGroupForOrg($org, $runner_group_id, $runner_id);
    }

    function delete($org, $runner_group_id, $runner_id): RemoveSelfHostedRunnerFromGroupForOrg
    {
        return new RemoveSelfHostedRunnerFromGroupForOrg($org, $runner_group_id, $runner_id);
    }
}
