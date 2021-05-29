<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\GetByUsernameOperation;

final class CbUsernameRcb
{
    function get($username): GetByUsernameOperation
    {
        return new GetByUsernameOperation($username);
    }
}
