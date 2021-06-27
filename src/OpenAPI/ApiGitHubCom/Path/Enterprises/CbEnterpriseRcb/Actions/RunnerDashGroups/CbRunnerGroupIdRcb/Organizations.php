<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb;

final class Organizations
{
    function get($enterprise, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id, $per_page, $page);
    }
    function put($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise($enterprise, $runner_group_id);
    }
}
