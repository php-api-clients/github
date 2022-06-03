<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb;

final class OutsideCollaborators
{
    function get($org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListOutsideCollaborators
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Orgs\ListOutsideCollaborators($org, $filter, $per_page, $page);
    }
}
