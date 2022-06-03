<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprises\CbEnterpriseRcb\Actions;

final class RunnerGroups
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($enterprise, $per_page, $page);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($enterprise);
    }
}
