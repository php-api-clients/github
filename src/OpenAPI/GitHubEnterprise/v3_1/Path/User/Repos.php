<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForAuthenticatedUser;

final class Repos
{
    function get(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1, $since, $before): ListForAuthenticatedUser
    {
        return new ListForAuthenticatedUser($visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }

    function post(): CreateForAuthenticatedUser
    {
        return new CreateForAuthenticatedUser();
    }
}
