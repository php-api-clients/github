<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Following;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow;

final class CbUsernameRcb
{
    function get($username): CheckPersonIsFollowedByAuthenticated
    {
        return new CheckPersonIsFollowedByAuthenticated($username);
    }

    function put($username): Follow
    {
        return new Follow($username);
    }

    function delete($username): Unfollow
    {
        return new Unfollow($username);
    }
}
