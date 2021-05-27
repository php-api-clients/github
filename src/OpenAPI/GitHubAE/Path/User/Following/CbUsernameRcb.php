<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\FollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\FollowOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UnfollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\UnfollowOperation($username);
    }
}
