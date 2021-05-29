<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersInGroupForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\SetSelfHostedRunnersInGroupForOrgOperation;

final class Runners
{
    function get($org, $runner_group_id, int $per_page = 30, int $page = 1): ListSelfHostedRunnersInGroupForOrgOperation
    {
        return new ListSelfHostedRunnersInGroupForOrgOperation($org, $runner_group_id, $per_page, $page);
    }

    function put($org, $runner_group_id): SetSelfHostedRunnersInGroupForOrgOperation
    {
        return new SetSelfHostedRunnersInGroupForOrgOperation($org, $runner_group_id);
    }
}
