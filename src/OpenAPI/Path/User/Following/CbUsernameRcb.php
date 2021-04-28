<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Following;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\FollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\FollowOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\Operation\Users\UnfollowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\UnfollowOperation($username);
    }
}
