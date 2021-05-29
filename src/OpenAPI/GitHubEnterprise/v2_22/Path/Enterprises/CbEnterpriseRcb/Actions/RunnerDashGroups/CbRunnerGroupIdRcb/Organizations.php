<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation;

final class Organizations
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1): ListOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new ListOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $per_page, $page);
    }

    function put($enterprise, $runner_group_id): SetOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new SetOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id);
    }
}
