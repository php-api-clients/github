<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise;

final class CbRunnerGroupIdRcb
{
    function get($enterprise, $runner_group_id): GetSelfHostedRunnerGroupForEnterprise
    {
        return new GetSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }

    function delete($enterprise, $runner_group_id): DeleteSelfHostedRunnerGroupFromEnterprise
    {
        return new DeleteSelfHostedRunnerGroupFromEnterprise($enterprise, $runner_group_id);
    }

    function patch($enterprise, $runner_group_id): UpdateSelfHostedRunnerGroupForEnterprise
    {
        return new UpdateSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }
}
