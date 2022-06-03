<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups;

final class CbRunnerGroupIdRcb
{
    function get($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }
    function delete($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($enterprise, $runner_group_id);
    }
    function patch($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($enterprise, $runner_group_id);
    }
}
