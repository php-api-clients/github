<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\GetByUsername;

final class CbUsernameRcb
{
    function get($username): GetByUsername
    {
        return new GetByUsername($username);
    }
}
