<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }
    function delete($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }
}
