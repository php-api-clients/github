<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb;

final class Collaborators
{
    function get($project_id, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaborators
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListCollaborators($project_id, $affiliation, $per_page, $page);
    }
}
