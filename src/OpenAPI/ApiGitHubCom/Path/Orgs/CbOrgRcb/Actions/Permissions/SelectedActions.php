<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganizationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganizationOperation;

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
