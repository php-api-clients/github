<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }
    function delete($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($enterprise, $runner_group_id, $runner_id);
    }
}
