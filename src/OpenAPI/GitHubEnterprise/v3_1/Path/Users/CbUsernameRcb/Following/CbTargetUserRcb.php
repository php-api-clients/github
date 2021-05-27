<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Users\CbUsernameRcb\Following;

final class CbTargetUserRcb
{
    function get($username, $target_user) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckFollowingForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\CheckFollowingForUserOperation($username, $target_user);
    }
}
