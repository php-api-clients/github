<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization;

final class Permissions
{
    function get($org): GetGithubActionsPermissionsOrganization
    {
        return new GetGithubActionsPermissionsOrganization($org);
    }

    function put($org): SetGithubActionsPermissionsOrganization
    {
        return new SetGithubActionsPermissionsOrganization($org);
    }
}
