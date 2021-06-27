<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Permissions;

final class SelectedActions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization($org);
    }
}
