<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Meta\GetZenOperation;

final class Zen
{
    function get(): GetZenOperation
    {
        return new GetZenOperation();
    }
}
