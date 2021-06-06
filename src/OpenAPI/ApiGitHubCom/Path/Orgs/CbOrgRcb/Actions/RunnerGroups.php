<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

final class RunnerGroups
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg($org, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg($org);
    }
}
