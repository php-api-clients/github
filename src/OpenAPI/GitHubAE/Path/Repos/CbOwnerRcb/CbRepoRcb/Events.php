<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoEvents
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListRepoEvents($owner, $repo, $per_page, $page);
    }
}