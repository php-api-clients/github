<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticated($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Follow($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unfollow($username);
    }
}
