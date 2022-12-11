<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Members\CbUsernameRcb;

final class Codespaces
{
    function get(int $per_page = 30, int $page = 1, $org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetCodespacesForUserInOrg($per_page, $page, $org, $username);
    }
}
