<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Orgs\CbOrgRcb;

final class Issues
{
    function get($org, string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Issues\ListForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\Issues\ListForOrgOperation($org, $filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
