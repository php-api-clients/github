<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $org_id);
    }
    function delete($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $org_id);
    }
}
