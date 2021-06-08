<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Meta\GetZen;

final class Zen
{
    function get(): GetZen
    {
        return new GetZen();
    }
}
