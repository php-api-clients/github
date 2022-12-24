<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Assignees
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListAssignees
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListAssignees($owner, $repo, $per_page, $page);
    }
}