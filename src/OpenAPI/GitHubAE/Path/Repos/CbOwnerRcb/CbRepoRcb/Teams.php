<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Teams
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListTeams
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListTeams($owner, $repo, $per_page, $page);
    }
}