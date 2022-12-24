<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Contributors
{
    function get($owner, $repo, $anon, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListContributors
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListContributors($owner, $repo, $anon, $per_page, $page);
    }
}