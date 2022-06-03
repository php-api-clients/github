<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin;

final class Keys
{
    function get(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListPublicKeys
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\ListPublicKeys($per_page, $page, $direction, $sort, $since);
    }
}
