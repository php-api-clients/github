<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Emojis\GetOperation;

final class Emojis
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
