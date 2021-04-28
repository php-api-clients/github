<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Comments
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCommitCommentsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCommitCommentsForRepoOperation($owner, $repo, $per_page, $page);
    }
}
