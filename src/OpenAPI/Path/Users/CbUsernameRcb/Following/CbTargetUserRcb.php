<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckFollowingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Users\CheckFollowingForUserOperation($username, $target_user);
    }
}
