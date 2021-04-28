<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Collaborators
{
    function get($owner, $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCollaboratorsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCollaboratorsOperation($owner, $repo, $affiliation, $per_page, $page);
    }
}
