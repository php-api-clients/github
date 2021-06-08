<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Emojis\Get;

final class Emojis
{
    function get(): Get
    {
        return new Get();
    }
}
