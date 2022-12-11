<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces;

final class CbCodespaceNameRcb
{
    function delete($org, $username, $codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteFromOrganization($org, $username, $codespace_name);
    }
}
