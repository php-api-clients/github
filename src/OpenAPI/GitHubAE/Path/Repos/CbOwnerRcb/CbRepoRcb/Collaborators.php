<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCollaboratorsOperation;

final class Collaborators
{
    function get($owner, $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1): ListCollaboratorsOperation
    {
        return new ListCollaboratorsOperation($owner, $repo, $affiliation, $per_page, $page);
    }
}
