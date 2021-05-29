<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\SuspendUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UnsuspendUser;

final class Suspended
{
    function put($username): SuspendUser
    {
        return new SuspendUser($username);
    }

    function delete($username): UnsuspendUser
    {
        return new UnsuspendUser($username);
    }
}
