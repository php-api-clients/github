<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetAuthenticatedOperation;

final class App
{
    function get(): GetAuthenticatedOperation
    {
        return new GetAuthenticatedOperation();
    }
}
