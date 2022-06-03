<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Projects
{
    function get($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\ListForRepo($owner, $repo, $state, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\CreateForRepo($owner, $repo);
    }
}
