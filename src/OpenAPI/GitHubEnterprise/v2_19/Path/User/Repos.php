<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForAuthenticatedUserOperation;

final class Repos
{
    function get(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1, $since, $before): ListForAuthenticatedUserOperation
    {
        return new ListForAuthenticatedUserOperation($visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }

    function post(): CreateForAuthenticatedUserOperation
    {
        return new CreateForAuthenticatedUserOperation();
    }
}
