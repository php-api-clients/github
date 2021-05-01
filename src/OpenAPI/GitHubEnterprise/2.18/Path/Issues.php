<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path;

final class Issues
{
    function get(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, $collab, $orgs, $owned, $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Issues\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Issues\ListOperation($filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
}
