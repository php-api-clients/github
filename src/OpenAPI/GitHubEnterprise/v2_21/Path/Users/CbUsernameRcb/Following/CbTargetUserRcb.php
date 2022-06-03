<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\CheckFollowingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\CheckFollowingForUser($username, $target_user);
    }
}
