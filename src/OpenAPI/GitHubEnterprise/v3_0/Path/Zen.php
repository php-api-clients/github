<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Meta\GetZenOperation;

final class Zen
{
    function get(): GetZenOperation
    {
        return new GetZenOperation();
    }
}
