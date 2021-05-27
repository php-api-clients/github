<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups;

final class CbRunnerGroupIdRcb
{
    function get($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterpriseOperation($enterprise, $runner_group_id);
    }
    function delete($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterpriseOperation($enterprise, $runner_group_id);
    }
    function patch($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterpriseOperation($enterprise, $runner_group_id);
    }
}
