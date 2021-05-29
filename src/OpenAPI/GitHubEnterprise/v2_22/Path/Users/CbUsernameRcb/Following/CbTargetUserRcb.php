<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb\Following;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\CheckFollowingForUser;

final class CbTargetUserRcb
{
    function get($username, $target_user): CheckFollowingForUser
    {
        return new CheckFollowingForUser($username, $target_user);
    }
}
