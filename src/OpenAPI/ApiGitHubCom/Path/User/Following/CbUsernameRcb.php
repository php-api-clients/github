<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\FollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\FollowOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UnfollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UnfollowOperation($username);
    }
}
