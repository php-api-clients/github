<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb;

final class Stop
{
    function post($org, $username, $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StopInOrganization($org, $username, $codespace_name);
    }
}
