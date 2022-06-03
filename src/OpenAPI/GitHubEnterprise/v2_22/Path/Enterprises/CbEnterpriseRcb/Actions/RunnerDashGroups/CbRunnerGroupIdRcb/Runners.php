<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

final class Runners
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($enterprise, $runner_group_id, $per_page, $page);
    }
    function put($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($enterprise, $runner_group_id);
    }
}
