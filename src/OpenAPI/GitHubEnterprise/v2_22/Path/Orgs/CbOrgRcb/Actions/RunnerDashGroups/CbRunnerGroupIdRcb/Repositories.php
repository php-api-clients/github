<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

final class Repositories
{
    function get($org, $runner_group_id, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id, $page, $per_page);
    }
    function put($org, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg($org, $runner_group_id);
    }
}
