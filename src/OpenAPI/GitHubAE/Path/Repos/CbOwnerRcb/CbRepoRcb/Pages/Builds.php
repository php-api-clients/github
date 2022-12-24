<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages;

final class Builds
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPagesBuilds
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPagesBuilds($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RequestPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RequestPagesBuild($owner, $repo);
    }
}