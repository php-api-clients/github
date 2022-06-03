<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions;

final class RunnerGroups
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($enterprise, $per_page, $page);
    }
    function post($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($enterprise);
    }
}
