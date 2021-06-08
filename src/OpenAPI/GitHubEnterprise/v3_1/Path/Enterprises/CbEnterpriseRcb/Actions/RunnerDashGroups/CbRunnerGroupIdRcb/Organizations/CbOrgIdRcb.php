<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise;

final class CbOrgIdRcb
{
    function put($enterprise, $runner_group_id, $org_id): AddOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new AddOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $org_id);
    }

    function delete($enterprise, $runner_group_id, $org_id): RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $org_id);
    }
}
