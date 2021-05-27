<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganizationOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation($org);
    }
}
