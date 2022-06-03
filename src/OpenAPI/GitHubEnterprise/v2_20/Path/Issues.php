<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

final class Issues
{
    function get(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, $collab, $orgs, $owned, $pulls, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\List($filter, $state, $labels, $sort, $direction, $since, $collab, $orgs, $owned, $pulls, $per_page, $page);
    }
}
