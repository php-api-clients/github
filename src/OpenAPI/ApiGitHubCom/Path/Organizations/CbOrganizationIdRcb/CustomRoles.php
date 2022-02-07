<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Organizations\CbOrganizationIdRcb;

final class CustomRoles
{
    function get($organization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles($organization_id);
    }
}
