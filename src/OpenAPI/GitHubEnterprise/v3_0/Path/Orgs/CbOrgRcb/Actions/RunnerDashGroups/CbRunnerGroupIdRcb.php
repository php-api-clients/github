<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerGroupForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\UpdateSelfHostedRunnerGroupForOrgOperation;

final class CbRunnerGroupIdRcb
{
    function get($org, $runner_group_id): GetSelfHostedRunnerGroupForOrgOperation
    {
        return new GetSelfHostedRunnerGroupForOrgOperation($org, $runner_group_id);
    }

    function delete($org, $runner_group_id): DeleteSelfHostedRunnerGroupFromOrgOperation
    {
        return new DeleteSelfHostedRunnerGroupFromOrgOperation($org, $runner_group_id);
    }

    function patch($org, $runner_group_id): UpdateSelfHostedRunnerGroupForOrgOperation
    {
        return new UpdateSelfHostedRunnerGroupForOrgOperation($org, $runner_group_id);
    }
}
