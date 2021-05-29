<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaboratorsOperation;

final class Collaborators
{
    function get($project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1): ListCollaboratorsOperation
    {
        return new ListCollaboratorsOperation($project_id, $affiliation, $per_page, $page);
    }
}
