<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Labels
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListLabelsForRepo($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateLabel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\CreateLabel($owner, $repo);
    }
}
