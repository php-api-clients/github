<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class ExternalGroups
{
    function get($org, int $per_page = 30, $page, $display_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListExternalIdpGroupsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListExternalIdpGroupsForOrg($org, $per_page, $page, $display_name);
    }
}
