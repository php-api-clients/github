<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetZen;

final class Zen
{
    function get(): GetZen
    {
        return new GetZen();
    }
}
