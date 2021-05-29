<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise;

final class Runners
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1): ListSelfHostedRunnersInGroupForEnterprise
    {
        return new ListSelfHostedRunnersInGroupForEnterprise($enterprise, $runner_group_id, $per_page, $page);
    }

    function put($enterprise, $runner_group_id): SetSelfHostedRunnersInGroupForEnterprise
    {
        return new SetSelfHostedRunnersInGroupForEnterprise($enterprise, $runner_group_id);
    }
}
