<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\GetAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\UpdateAuthenticatedOperation;

final class User
{
    function get(): GetAuthenticatedOperation
    {
        return new GetAuthenticatedOperation();
    }

    function patch(): UpdateAuthenticatedOperation
    {
        return new UpdateAuthenticatedOperation();
    }
}
