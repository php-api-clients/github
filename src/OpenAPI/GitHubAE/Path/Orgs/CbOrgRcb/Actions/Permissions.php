<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization($org);
    }
}
