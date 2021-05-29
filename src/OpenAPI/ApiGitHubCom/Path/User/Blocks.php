<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticatedOperation;

final class Blocks
{
    function get(): ListBlockedByAuthenticatedOperation
    {
        return new ListBlockedByAuthenticatedOperation();
    }
}
