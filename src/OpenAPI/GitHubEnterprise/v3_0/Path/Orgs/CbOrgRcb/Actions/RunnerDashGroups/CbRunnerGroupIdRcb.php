<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups;

final class CbRunnerGroupIdRcb
{
    function get($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetSelfHostedRunnerGroupForOrg($org, $runner_group_id);
    }
    function delete($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg($org, $runner_group_id);
    }
    function patch($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg($org, $runner_group_id);
    }
}
