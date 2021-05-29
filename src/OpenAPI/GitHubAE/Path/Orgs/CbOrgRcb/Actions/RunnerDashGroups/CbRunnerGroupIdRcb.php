<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\UpdateSelfHostedRunnerGroupForOrgOperation;

final class CbRunnerGroupIdRcb
{
    function delete($org, $runner_group_id): DeleteSelfHostedRunnerGroupFromOrgOperation
    {
        return new DeleteSelfHostedRunnerGroupFromOrgOperation($org, $runner_group_id);
    }

    function patch($org, $runner_group_id): UpdateSelfHostedRunnerGroupForOrgOperation
    {
        return new UpdateSelfHostedRunnerGroupForOrgOperation($org, $runner_group_id);
    }
}
