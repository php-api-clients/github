<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Emojis\GetOperation;

final class Emojis
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
