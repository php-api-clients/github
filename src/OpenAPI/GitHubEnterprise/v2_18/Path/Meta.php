<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Meta\Get;

final class Meta
{
    function get(): Get
    {
        return new Get();
    }
}
