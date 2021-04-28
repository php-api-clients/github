<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Networks\CbOwnerRcb\CbRepoRcb;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicEventsForRepoNetworkOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListPublicEventsForRepoNetworkOperation($owner, $repo, $per_page, $page);
    }
}
