<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerGroupForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg;

final class CbRunnerGroupIdRcb
{
    function get($org, $runner_group_id): GetSelfHostedRunnerGroupForOrg
    {
        return new GetSelfHostedRunnerGroupForOrg($org, $runner_group_id);
    }

    function delete($org, $runner_group_id): DeleteSelfHostedRunnerGroupFromOrg
    {
        return new DeleteSelfHostedRunnerGroupFromOrg($org, $runner_group_id);
    }

    function patch($org, $runner_group_id): UpdateSelfHostedRunnerGroupForOrg
    {
        return new UpdateSelfHostedRunnerGroupForOrg($org, $runner_group_id);
    }
}
