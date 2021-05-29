<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterpriseOperation;

final class CbRunnerIdRcb
{
    function put($enterprise, $runner_group_id, $runner_id): AddSelfHostedRunnerToGroupForEnterpriseOperation
    {
        return new AddSelfHostedRunnerToGroupForEnterpriseOperation($enterprise, $runner_group_id, $runner_id);
    }

    function delete($enterprise, $runner_group_id, $runner_id): RemoveSelfHostedRunnerFromGroupForEnterpriseOperation
    {
        return new RemoveSelfHostedRunnerFromGroupForEnterpriseOperation($enterprise, $runner_group_id, $runner_id);
    }
}
