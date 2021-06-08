<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganization;

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
