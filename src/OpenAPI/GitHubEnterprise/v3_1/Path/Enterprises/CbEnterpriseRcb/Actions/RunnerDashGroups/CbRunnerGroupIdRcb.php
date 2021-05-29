<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterpriseOperation;

final class CbRunnerGroupIdRcb
{
    function get($enterprise, $runner_group_id): GetSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new GetSelfHostedRunnerGroupForEnterpriseOperation($enterprise, $runner_group_id);
    }

    function delete($enterprise, $runner_group_id): DeleteSelfHostedRunnerGroupFromEnterpriseOperation
    {
        return new DeleteSelfHostedRunnerGroupFromEnterpriseOperation($enterprise, $runner_group_id);
    }

    function patch($enterprise, $runner_group_id): UpdateSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new UpdateSelfHostedRunnerGroupForEnterpriseOperation($enterprise, $runner_group_id);
    }
}
