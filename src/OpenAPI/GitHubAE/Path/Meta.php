<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Meta\GetOperation;

final class Meta
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
