<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetZen;

final class Zen
{
    function get(): GetZen
    {
        return new GetZen();
    }
}
