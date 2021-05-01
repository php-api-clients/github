<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Enterprises\CbEnterpriseRcb\Actions\Runner-Groups\CbRunnerGroupIdRcb\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }
    function delete($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterpriseOperation($enterprise, $runner_group_id, $org_id);
    }
}
