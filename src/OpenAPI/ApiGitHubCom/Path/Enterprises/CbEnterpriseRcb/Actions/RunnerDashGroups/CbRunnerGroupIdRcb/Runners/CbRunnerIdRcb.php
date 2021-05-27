<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterpriseOperation($enterprise, $runner_group_id, $runner_id);
    }
    function delete($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterpriseOperation($enterprise, $runner_group_id, $runner_id);
    }
}
