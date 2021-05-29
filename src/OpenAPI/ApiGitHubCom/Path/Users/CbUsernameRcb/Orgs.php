<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser;

final class Orgs
{
    function get($username, int $per_page = 30, int $page = 1): ListForUser
    {
        return new ListForUser($username, $per_page, $page);
    }
}
