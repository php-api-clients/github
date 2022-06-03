<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups;

final class CbRunnerGroupIdRcb
{
    function get($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }
    function delete($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($enterprise, $runner_group_id);
    }
    function patch($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }
}
