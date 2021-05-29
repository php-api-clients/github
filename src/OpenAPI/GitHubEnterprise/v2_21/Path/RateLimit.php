<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\RateLimit\GetOperation;

final class RateLimit
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
