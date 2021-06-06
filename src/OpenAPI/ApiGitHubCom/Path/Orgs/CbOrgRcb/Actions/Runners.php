<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

final class Runners
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg($org, $per_page, $page);
    }
}
