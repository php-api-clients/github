<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Workflows
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflows
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflows($owner, $repo, $per_page, $page);
    }
}
