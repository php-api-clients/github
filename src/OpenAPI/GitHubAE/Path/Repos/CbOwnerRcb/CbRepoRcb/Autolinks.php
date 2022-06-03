<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Autolinks
{
    function get($owner, $repo, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListAutolinks
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListAutolinks($owner, $repo, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateAutolink($owner, $repo);
    }
}
