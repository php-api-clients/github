<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Users;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetByUsername;

final class CbUsernameRcb
{
    function get($username): GetByUsername
    {
        return new GetByUsername($username);
    }
}
