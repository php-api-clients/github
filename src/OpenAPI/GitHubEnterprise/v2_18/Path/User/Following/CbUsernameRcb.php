<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User\Following;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\CheckPersonIsFollowedByAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\FollowOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\UnfollowOperation;

final class CbUsernameRcb
{
    function get($username): CheckPersonIsFollowedByAuthenticatedOperation
    {
        return new CheckPersonIsFollowedByAuthenticatedOperation($username);
    }

    function put($username): FollowOperation
    {
        return new FollowOperation($username);
    }

    function delete($username): UnfollowOperation
    {
        return new UnfollowOperation($username);
    }
}
