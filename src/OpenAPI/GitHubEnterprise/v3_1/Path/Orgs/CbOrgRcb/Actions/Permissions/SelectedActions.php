<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsOrganizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsOrganizationOperation;

final class SelectedActions
{
    function get($org): GetAllowedActionsOrganizationOperation
    {
        return new GetAllowedActionsOrganizationOperation($org);
    }

    function put($org): SetAllowedActionsOrganizationOperation
    {
        return new SetAllowedActionsOrganizationOperation($org);
    }
}
