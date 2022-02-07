<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\ExternalDashGroup;

final class CbGroupIdRcb
{
    function get($org, $group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ExternalIdpGroupInfoForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ExternalIdpGroupInfoForOrg($org, $group_id);
    }
}
