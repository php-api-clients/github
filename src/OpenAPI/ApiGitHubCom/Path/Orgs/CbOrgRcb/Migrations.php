<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Migrations
{
    function get($org, int $per_page = 30, int $page = 1, $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListForOrg($org, $per_page, $page, $exclude);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\StartForOrg($org);
    }
}
