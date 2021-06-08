<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersInGroupForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelfHostedRunnersInGroupForOrg;

final class Runners
{
    function get($org, $runner_group_id, int $per_page = 30, int $page = 1): ListSelfHostedRunnersInGroupForOrg
    {
        return new ListSelfHostedRunnersInGroupForOrg($org, $runner_group_id, $per_page, $page);
    }

    function put($org, $runner_group_id): SetSelfHostedRunnersInGroupForOrg
    {
        return new SetSelfHostedRunnersInGroupForOrg($org, $runner_group_id);
    }
}
