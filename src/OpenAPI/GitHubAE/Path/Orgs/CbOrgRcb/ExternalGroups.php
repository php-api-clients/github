<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

final class ExternalGroups
{
    function get($org, int $per_page = 30, $page, $display_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListExternalIdpGroupsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListExternalIdpGroupsForOrg($org, $per_page, $page, $display_name);
    }
}
