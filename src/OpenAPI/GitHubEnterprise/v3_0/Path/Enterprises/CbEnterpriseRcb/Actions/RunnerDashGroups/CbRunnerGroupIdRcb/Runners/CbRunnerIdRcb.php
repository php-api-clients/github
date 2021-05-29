<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise;

final class CbRunnerIdRcb
{
    function put($enterprise, $runner_group_id, $runner_id): AddSelfHostedRunnerToGroupForEnterprise
    {
        return new AddSelfHostedRunnerToGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }

    function delete($enterprise, $runner_group_id, $runner_id): RemoveSelfHostedRunnerFromGroupForEnterprise
    {
        return new RemoveSelfHostedRunnerFromGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }
}
