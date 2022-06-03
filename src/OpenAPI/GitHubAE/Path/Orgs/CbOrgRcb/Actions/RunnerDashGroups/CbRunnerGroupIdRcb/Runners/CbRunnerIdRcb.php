<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners;

final class CbRunnerIdRcb
{
    function put($org, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelfHostedRunnerToGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelfHostedRunnerToGroupForOrg($org, $runner_group_id, $runner_id);
    }
}
