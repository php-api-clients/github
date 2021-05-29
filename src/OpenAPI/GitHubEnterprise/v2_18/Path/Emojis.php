<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Emojis\GetOperation;

final class Emojis
{
    function get(): GetOperation
    {
        return new GetOperation();
    }
}
