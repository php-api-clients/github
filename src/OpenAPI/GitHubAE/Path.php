<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\Root;

final class Path
{
    function get(): Root
    {
        return new Root();
    }
}
