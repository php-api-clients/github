<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Codespaces
{
    function get(int $per_page = 30, int $page = 1, $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListInOrganization($per_page, $page, $org);
    }
}
