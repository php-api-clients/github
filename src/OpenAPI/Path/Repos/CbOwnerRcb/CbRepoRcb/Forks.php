<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Forks
{
    function get($owner, $repo, string $sort = 'newest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListForksOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListForksOperation($owner, $repo, $sort, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateForkOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateForkOperation($owner, $repo);
    }
}
