<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\RateLimit\Get;

final class RateLimit
{
    function get(): Get
    {
        return new Get();
    }
}
