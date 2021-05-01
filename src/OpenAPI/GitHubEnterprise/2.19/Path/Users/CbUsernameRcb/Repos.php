<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Users\CbUsernameRcb;

final class Repos
{
    function get($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Repos\ListForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Repos\ListForUserOperation($username, $type, $sort, $direction, $per_page, $page);
    }
}
