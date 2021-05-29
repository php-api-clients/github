<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Get;

final class Meta
{
    function get(): Get
    {
        return new Get();
    }
}
