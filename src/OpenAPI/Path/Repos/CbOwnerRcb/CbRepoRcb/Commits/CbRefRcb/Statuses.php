<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class Statuses
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCommitStatusesForRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListCommitStatusesForRefOperation($owner, $repo, $ref, $per_page, $page);
    }
}
