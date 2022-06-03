<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForRepo($owner, $repo, $per_page, $page);
    }
}
