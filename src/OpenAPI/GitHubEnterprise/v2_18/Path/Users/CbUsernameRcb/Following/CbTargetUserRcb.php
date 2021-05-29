<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb\Following;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\CheckFollowingForUserOperation;

final class CbTargetUserRcb
{
    function get($username, $target_user): CheckFollowingForUserOperation
    {
        return new CheckFollowingForUserOperation($username, $target_user);
    }
}
