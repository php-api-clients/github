<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg;

final class CbRunnerGroupIdRcb
{
    function delete($org, $runner_group_id): DeleteSelfHostedRunnerGroupFromOrg
    {
        return new DeleteSelfHostedRunnerGroupFromOrg($org, $runner_group_id);
    }

    function patch($org, $runner_group_id): UpdateSelfHostedRunnerGroupForOrg
    {
        return new UpdateSelfHostedRunnerGroupForOrg($org, $runner_group_id);
    }
}
