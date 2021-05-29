<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\ListCollaborators;

final class Collaborators
{
    function get($owner, $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1): ListCollaborators
    {
        return new ListCollaborators($owner, $repo, $affiliation, $per_page, $page);
    }
}
