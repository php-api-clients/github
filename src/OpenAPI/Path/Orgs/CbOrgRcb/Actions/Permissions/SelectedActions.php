<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Permissions;

final class SelectedActions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetAllowedActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetAllowedActionsOrganizationOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetAllowedActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetAllowedActionsOrganizationOperation($org);
    }
}
