<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetAuthenticatedOperation;

final class App
{
    function get(): GetAuthenticatedOperation
    {
        return new GetAuthenticatedOperation();
    }
}
