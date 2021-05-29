<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise;

final class Organizations
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1): ListOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new ListOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $per_page, $page);
    }

    function put($enterprise, $runner_group_id): SetOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new SetOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id);
    }
}