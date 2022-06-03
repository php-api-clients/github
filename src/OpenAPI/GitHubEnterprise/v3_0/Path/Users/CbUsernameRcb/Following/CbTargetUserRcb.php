<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\CheckFollowingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\CheckFollowingForUser($username, $target_user);
    }
}
