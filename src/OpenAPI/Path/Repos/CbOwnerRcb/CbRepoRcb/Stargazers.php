<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Stargazers
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListStargazersForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListStargazersForRepoOperation($owner, $repo, $per_page, $page);
    }
}
