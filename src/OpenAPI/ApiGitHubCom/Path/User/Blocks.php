<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticated;

final class Blocks
{
    function get(): ListBlockedByAuthenticated
    {
        return new ListBlockedByAuthenticated();
    }
}
