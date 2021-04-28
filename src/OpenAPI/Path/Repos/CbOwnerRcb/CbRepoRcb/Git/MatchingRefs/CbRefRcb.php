<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs;

final class CbRefRcb
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Git\ListMatchingRefsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\ListMatchingRefsOperation($owner, $repo, $ref, $per_page, $page);
    }
}
