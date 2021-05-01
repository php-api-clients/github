<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Orgs\CbOrgRcb;

final class Members
{
    function get($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Orgs\ListMembersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Orgs\ListMembersOperation($org, $filter, $role, $per_page, $page);
    }
}
