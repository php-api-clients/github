<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($org, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg($org, $runner_group_id, $runner_id);
    }
    function delete($org, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg($org, $runner_group_id, $runner_id);
    }
}
