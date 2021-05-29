<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users\GetByUsername;

final class CbUsernameRcb
{
    function get($username): GetByUsername
    {
        return new GetByUsername($username);
    }
}
