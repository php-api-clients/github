<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Assignees
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListAssigneesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListAssigneesOperation($owner, $repo, $per_page, $page);
    }
}
