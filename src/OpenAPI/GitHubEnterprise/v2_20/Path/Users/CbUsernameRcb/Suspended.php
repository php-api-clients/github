<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SuspendUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UnsuspendUserOperation;

final class Suspended
{
    function put($username): SuspendUserOperation
    {
        return new SuspendUserOperation($username);
    }

    function delete($username): UnsuspendUserOperation
    {
        return new UnsuspendUserOperation($username);
    }
}
