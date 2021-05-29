<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get;

final class Meta
{
    function get(): Get
    {
        return new Get();
    }
}
