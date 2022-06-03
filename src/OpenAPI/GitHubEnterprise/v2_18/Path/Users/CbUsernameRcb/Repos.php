<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

final class Repos
{
    function get($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListForUser($username, $type, $sort, $direction, $per_page, $page);
    }
}
