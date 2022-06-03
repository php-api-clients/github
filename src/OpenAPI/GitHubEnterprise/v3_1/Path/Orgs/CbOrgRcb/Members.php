<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb;

final class Members
{
    function get($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListMembers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs\ListMembers($org, $filter, $role, $per_page, $page);
    }
}
