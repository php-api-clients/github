<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterpriseOperation;

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
