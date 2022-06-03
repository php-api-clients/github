<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticated($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Follow($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\Unfollow($username);
    }
}
