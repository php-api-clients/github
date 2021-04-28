<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Issues;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Issues\ListEventsForRepoOperation($owner, $repo, $per_page, $page);
    }
}
