<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization($org);
    }
}
