<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\FollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\FollowOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UnfollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\UnfollowOperation($username);
    }
}
