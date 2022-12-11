<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Collaborators
{
    function get($owner, $repo, string $affiliation = 'all', $permission, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCollaborators
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCollaborators($owner, $repo, $affiliation, $permission, $per_page, $page);
    }
}
