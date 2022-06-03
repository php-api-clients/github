<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb;

final class Members
{
    function get($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembers($org, $filter, $role, $per_page, $page);
    }
}
