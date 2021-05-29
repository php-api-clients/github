<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Root;

final class Path
{
    function get(): Root
    {
        return new Root();
    }
}
