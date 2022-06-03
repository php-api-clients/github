<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Following
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedUser($per_page, $page);
    }
}
