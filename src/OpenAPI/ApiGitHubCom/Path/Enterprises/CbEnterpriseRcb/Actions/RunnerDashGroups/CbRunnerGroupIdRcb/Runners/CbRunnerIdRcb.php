<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }
    function delete($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }
}
