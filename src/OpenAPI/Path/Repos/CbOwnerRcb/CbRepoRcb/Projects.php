<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Projects
{
    function get($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\ListForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\ListForRepoOperation($owner, $repo, $state, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\CreateForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\CreateForRepoOperation($owner, $repo);
    }
}
