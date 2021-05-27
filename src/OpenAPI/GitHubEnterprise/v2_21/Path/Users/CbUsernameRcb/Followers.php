<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

final class Followers
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\ListFollowersForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\ListFollowersForUserOperation($username, $per_page, $page);
    }
}
