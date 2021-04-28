<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Branches
{
    function get($owner, $repo, $protected, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListBranchesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListBranchesOperation($owner, $repo, $protected, $per_page, $page);
    }
}
