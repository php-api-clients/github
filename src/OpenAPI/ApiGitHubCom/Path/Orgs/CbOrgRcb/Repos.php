<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Repos
{
    function get($org, $type, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg($org, $type, $sort, $direction, $per_page, $page);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg($org);
    }
}
