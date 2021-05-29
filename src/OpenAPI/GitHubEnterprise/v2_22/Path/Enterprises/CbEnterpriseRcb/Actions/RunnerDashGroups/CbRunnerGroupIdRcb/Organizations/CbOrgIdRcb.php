<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation;

final class CbOrgIdRcb
{
    function put($enterprise, $runner_group_id, $org_id): AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }

    function delete($enterprise, $runner_group_id, $org_id): RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }
}
