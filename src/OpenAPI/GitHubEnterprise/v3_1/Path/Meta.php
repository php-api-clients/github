<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetOperation;

final class Meta
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
