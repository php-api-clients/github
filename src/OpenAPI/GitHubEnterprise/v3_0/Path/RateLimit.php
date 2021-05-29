<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\RateLimit\GetOperation;

final class RateLimit
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
