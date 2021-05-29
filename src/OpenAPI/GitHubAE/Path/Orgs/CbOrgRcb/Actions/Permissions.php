<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation;

final class Permissions
{
    function get($org): GetGithubActionsPermissionsOrganizationOperation
    {
        return new GetGithubActionsPermissionsOrganizationOperation($org);
    }

    function put($org): SetGithubActionsPermissionsOrganizationOperation
    {
        return new SetGithubActionsPermissionsOrganizationOperation($org);
    }
}
