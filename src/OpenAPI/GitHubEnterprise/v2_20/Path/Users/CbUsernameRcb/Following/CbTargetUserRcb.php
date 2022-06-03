<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckFollowingForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Users\CheckFollowingForUser($username, $target_user);
    }
}
