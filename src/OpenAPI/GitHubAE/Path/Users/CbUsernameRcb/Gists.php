<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\ListForUser;

final class Gists
{
    function get($username, $since, int $per_page = 30, int $page = 1): ListForUser
    {
        return new ListForUser($username, $since, $per_page, $page);
    }
}
