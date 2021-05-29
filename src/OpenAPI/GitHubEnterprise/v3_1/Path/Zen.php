<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Meta\GetZenOperation;

final class Zen
{
    function get(): GetZenOperation
    {
        return new GetZenOperation();
    }
}
