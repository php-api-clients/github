<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\CheckFollowingForUserOperation($username, $target_user);
    }
}
