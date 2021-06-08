<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization;

final class SelectedActions
{
    function get($org): GetAllowedActionsOrganization
    {
        return new GetAllowedActionsOrganization($org);
    }

    function put($org): SetAllowedActionsOrganization
    {
        return new SetAllowedActionsOrganization($org);
    }
}
