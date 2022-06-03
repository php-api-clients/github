<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

final class Runners
{
    function get($org, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersInGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListSelfHostedRunnersInGroupForOrg($org, $runner_group_id, $per_page, $page);
    }
    function put($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\SetSelfHostedRunnersInGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\SetSelfHostedRunnersInGroupForOrg($org, $runner_group_id);
    }
}
