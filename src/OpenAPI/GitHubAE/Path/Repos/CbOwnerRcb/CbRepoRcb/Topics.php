<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Topics
{
    function get($owner, $repo, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllTopics
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllTopics($owner, $repo, $page, $per_page);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ReplaceAllTopics
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ReplaceAllTopics($owner, $repo);
    }
}
