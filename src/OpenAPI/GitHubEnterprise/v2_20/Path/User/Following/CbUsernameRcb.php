<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckPersonIsFollowedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckPersonIsFollowedByAuthenticated($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Follow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Follow($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Unfollow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\Unfollow($username);
    }
}
