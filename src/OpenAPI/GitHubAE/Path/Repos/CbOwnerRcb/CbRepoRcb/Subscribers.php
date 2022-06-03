<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Subscribers
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchersForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchersForRepo($owner, $repo, $per_page, $page);
    }
}
