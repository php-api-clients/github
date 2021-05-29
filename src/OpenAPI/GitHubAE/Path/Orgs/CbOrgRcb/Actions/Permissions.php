<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization;

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
